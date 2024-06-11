<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositGift extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function deposit()
    {
        return $this->belongsTo(Deposit::class, 'deposit_id');
    }
}
