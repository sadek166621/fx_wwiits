<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Teacher;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

}
