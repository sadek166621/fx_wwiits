<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Student;
use App\Models\Admin\Package;



class Withdrawreq extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo(Student::class,'member_id');
    }
    public function package()
    {
        return $this->belongsTo(Package::class,'package_id');
    }

}
