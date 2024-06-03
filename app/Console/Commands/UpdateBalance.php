<?php

namespace App\Console\Commands;

use App\Models\Admin\Student;
use App\Models\Deposit;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profits:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Profit For All Users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currentDate = Carbon::now();

        $members = Student::where('status',1)->get();

        foreach ($members as $member){
            $deposit_member = Deposit::where('member_id', $member->id)->where('status', 1)->get();
            $total_profit = 0;
            if(count($deposit_member)> 1){

                foreach($deposit_member as $deposit){
                    $lastEntryDate = $deposit->created_at;
                    $differenceInDays = $currentDate->diffInDays($lastEntryDate);
                    if($differenceInDays > 0 && $deposit->amount != 0){
                        $total_profit += $deposit->profit_amount * $differenceInDays;
                    }
                }
                if($deposit->amount != 0){
                    $member->update([
                        'profit'=> $total_profit,
                    ]);
                }
            }
            elseif(count($deposit_member) == 1){
                $deposit_member = Deposit::where('member_id', $member->id)->first();
                $lastEntryDate = $deposit_member->created_at;
                $differenceInDays = $currentDate->diffInDays($lastEntryDate);

                if($differenceInDays > 0 && $deposit_member->amount != 0){
                    $member->update([
                        'profit'=> $deposit_member->profit_amount * $differenceInDays,
                    ]);
                }
            }
        }
        return 0;
    }
}
