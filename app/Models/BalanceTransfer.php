<?php

namespace App\Models;

use App\Models\Admin\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceTransfer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo(Student::class, 'transferred_to', 'id');
    }
    public function tranferredFrom()
    {
        return $this->belongsTo(Student::class, 'member_id', 'id');
    }
}
