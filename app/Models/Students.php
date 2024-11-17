<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'class_teacher_id',
        'class',
        'addmission_date',
        'yearly_fees'
    ];

    public function teacher()
{
    return $this->belongsTo(Teacher::class, 'class_teacher_id');
}


}
