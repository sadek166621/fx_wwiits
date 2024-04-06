<?php

namespace App\Models;

use App\Models\Admin\Package;
use App\Models\Admin\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function member()
    {
        return $this->belongsTo(Student::class, 'member_id');
    }
}
