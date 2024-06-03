<?php

use App\Models\Admin\Setting;
use App\Models\Withdrawreq;
use App\Models\Deposit;
use App\Models\Admin\Package;
use Carbon\Carbon;
use App\Models\Admin\Bonus;
use App\Models\Admin\DepostReturn;
use App\Models\Admin\RolePermission;
use App\Models\Admin\Permission;


function decimal2($num){
    return number_format((float)$num, 2, '.', '');
}

function make_min_2_digits($num){
    return sprintf("%02d", $num);
}

if (!function_exists('rootDir')) {
    /**
     * @return string
     */
    function rootDir()
    {
        $paths = explode(DIRECTORY_SEPARATOR, $_SERVER['DOCUMENT_ROOT']);
        array_pop($paths);
        return implode(DIRECTORY_SEPARATOR, $paths);
    }
}

// Get default image
if (!function_exists('getDefaultImage')) {
    /**
     * @return string
     */
    function getDefaultImage()
    {
        return asset('/images/default.png');
    }
}

// Get user default image
if (!function_exists('getUserDefaultImage')) {
    /**
     * @return string
     */
    function getUserDefaultImage()
    {
        return asset('/images/user_default.png');
    }
}

// Get global image
if (!function_exists('getStorageImage')) {
    /**
     * @return string
     */
    function getStorageImage($path, $name, $is_user = false)
    {
        if ($name) {
            return asset('/storage/' . $path . '/' . $name);
        }
        return $is_user ? getUserDefaultImage() : getDefaultImage();
    }
}

if (!function_exists('get_page_meta')) {

    /**
     * get_page_meta
     *
     * @param  mixed $metaName
     * @return void
     */
    function get_page_meta($metaName = "title")
    {
        if (session()->has('page_meta_' . $metaName)) {
            $title = session()->get("page_meta_" . $metaName);
            session()->forget("page_meta_" . $metaName);
            return $title;
        }
        return null;
    }
}

if (!function_exists('set_page_meta')) {
    /**
     * set_page_meta
     *
     * @param null $content
     * @param string $metaName
     *
     * @return void
     */
    function set_page_meta($content = null, $metaName = "title")
    {
        if ($content && $metaName == "title") {
            session()->put('page_meta_' . $metaName, $content . ' |');
        } else {
            session()->put('page_meta_' . $metaName, $content);
        }
    }
}


if (!function_exists('custom_datetime')) {
    /**
     * custom_datetime
     *
     * @param  mixed $datetime
     * @param  mixed $format
     * @return void
     */
    function custom_datetime($datetime, $format = null)
    {
        if ($format) return date($format, strtotime($datetime));

        return date('Y-m-d g:i A', strtotime($datetime));
    }
}


if (!function_exists('custom_date')) {
    /**
     * custom_date
     *
     * @param  mixed $datetime
     * @param  mixed $format
     * @return void
     */
    function custom_date($datetime, $format = null)
    {
        if ($format) return date($format, strtotime($datetime));

        return date('Y-m-d', strtotime($datetime));
    }
}

if (!function_exists('getAppLogo')) {

    /**
     * getAppLogo
     *
     * @return void
     */
    function getAppLogo()
    {
        return asset('images/logo.png');
    }
}


function shop_domain_generator($shop){
    if ($shop == 'SHOP_1') {
        return 'localhost:8000';
        // return 'monsterfrontend.mashpy.me';
    }
}

if (!function_exists('percentageCalculation')) {

    /**
     * getAppLogo
     *
     * @return float|int
     */
    function percentageCalculation($price, $discount)
    {
        $discountPrice = $price * ($discount / 100);
        return $price - $discountPrice;
    }
}

if (!function_exists('getSetting')) {
    function getSetting()
    {
        $setting = Setting::first();
        return $setting;
    }
}

if (!function_exists('numberToText')) {
    function numberToText($n)
    {
        $dictionary  = array(
            0                   => 'Zero',
            1                   => 'One',
            2                   => 'Two',
            3                   => 'Three',
            4                   => 'Four',
            5                   => 'Five',
            6                   => 'Six',
            7                   => 'Seven',
            8                   => 'Eight',
            9                   => 'Nine',
            10                  => 'Ten',
            11                  => 'Eleven',
            12                  => 'Twelve'
        );
        if($n>0 && $n<=12){
            return $dictionary[$n];
        }
        return "";
    }
}
function findWithdrawRequest($date, $member_id, $package_id){
    // return $date;
    $data = Withdrawreq::where('date', $date)->where('member_id', $member_id)->where('package_id', $package_id)->first();
    return $data;
}
function getDepositSummary($id, $student_id)
{
    $deposits = Deposit::where('package_id', $id)->where('member_id', $student_id)->get();
    $currentDate = Carbon::now();
    $profit = 0;
    $data['current_deposit'] = Deposit::where('package_id', $id)->where('member_id', $student_id)->sum('amount');
    $package = Package::find($id);
    $data['total_deposit'] = $package->usa_amount * count($deposits);
    $data['total_withdraw'] = Withdrawreq::where('package_id', $id)->where('member_id', $student_id)->sum('amount');
    foreach ($deposits as $deposit){
        $days = $currentDate->diffInDays($deposit->created_at);
//        dd($days);
        $profit += $deposit->profit_amount * $days;
    }
    $data['total_profit'] =$profit;
    return $data;
}

function getLatestPackages()
{
    return Package::where('status', 1)->latest()->get()->take(3);
}

function getReferralBonus($id)
{
    return Bonus::where('package_id', $id)->where('bonus_type', 'referral_bonus')->first();
}

function getAffiliateBonus($id)
{
    return Bonus::where('package_id', $id)->where('bonus_type', 'affiliate_bonus')->first();
}

function getReturns($id)
{
    return DepostReturn::where('package_id', $id)->first();
}
function findPermission($id)
{
    return RolePermission::where('permission_id', $id)->first();
}

function findStaffPermission($route)
{
    $permission = Permission::where('guard_name', $route)->first();
    if($permission != null){
        $staff_permission = RolePermission::where('permission_id', $permission->id)->first();
        if($staff_permission != null){
//        dd('ok');
            return true;
        }
        else{
            return false;
        }
    }
}
