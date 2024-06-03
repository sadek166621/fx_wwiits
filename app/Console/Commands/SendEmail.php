<?php

namespace App\Console\Commands;

use App\Mail\ProfitUpdateBalance;
use App\Models\Admin\Student;
use Illuminate\Console\Command;
use Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Profit Email to All Users';

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
        $members = Student::where('status',1)->get();
        foreach ($members as $member){
            $email = $member->email;
            $profit = $member->profit;
            $balance = $member->bonus;
            Mail::to($email)->send(new ProfitUpdateBalance($profit, $balance));
        }
        return 0;
    }
}
