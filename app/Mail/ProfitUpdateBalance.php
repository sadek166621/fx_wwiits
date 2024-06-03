<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfitUpdateBalance extends Mailable
{
    use Queueable, SerializesModels;
    public $profit, $balance;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($profit, $balance)
    {
        $this->profit =  $profit;
        $this->balance =  $balance;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Daily Account Update')
            ->view('frontend.email.daily-update')
            ->with([
                'balance' => $this->balance,
                'profit' => $this->profit,
            ]);
    }
}
