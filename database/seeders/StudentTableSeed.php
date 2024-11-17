<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Students::create([
            'student_name' => 'Mayank Tiwari',
            'class_teacher_id' => '1',
            'class' => '5',
            'addmission_date' => '2024-11-16 13:31:46',
            'yearly_fees' => '500',
        ]);
    }
}
