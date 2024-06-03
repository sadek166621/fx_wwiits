<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Student;
use App\Models\BalanceTransfer;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class BalanceTransferController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            $balance_transfer = BalanceTransfer::latest();
            if(isset($_GET['member_id']) && $_GET['member_id'] > 0)
            {
                $balance_transfer = $balance_transfer->where('member_id', $_GET['member_id']);
            }
            if (isset($_GET['transferred_to']) && $_GET['transferred_to'] > 0) {
                $balance_transfer = $balance_transfer->where('transferred_to', $_GET['transferred_to']);
            }

            $data['items'] = $balance_transfer->get();
            return view('frontend.balance-transfer-history', $data);
        }
        else{
            $member = Student::where('id', Session::get('StudentId'))->first();
            $data['student'] = $member;
            $data['items'] = BalanceTransfer::where('member_id', $member->id)->latest()->get();
            return view('frontend.balance-transfer-history', $data);
        }


    }
}
