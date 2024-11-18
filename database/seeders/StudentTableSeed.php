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
        // Array of sample student data
        $students = [
            ['student_name' => 'Mayank Tiwari', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-11-16', 'yearly_fees' => 500],
            ['student_name' => 'Anita Sharma', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-11-15', 'yearly_fees' => 600],
            ['student_name' => 'Rohan Verma', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-11-14', 'yearly_fees' => 500],
            ['student_name' => 'Sneha Kapoor', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-11-13', 'yearly_fees' => 700],
            ['student_name' => 'Amit Gupta', 'class_teacher_id' => 4, 'class' => '8', 'addmission_date' => '2024-11-12', 'yearly_fees' => 800],
            ['student_name' => 'Neha Rathi', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-11-11', 'yearly_fees' => 600],
            ['student_name' => 'Manoj Tiwari', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-11-10', 'yearly_fees' => 700],
            ['student_name' => 'Priya Desai', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-11-09', 'yearly_fees' => 500],
            ['student_name' => 'Karan Mehra', 'class_teacher_id' => 4, 'class' => '8', 'addmission_date' => '2024-11-08', 'yearly_fees' => 800],
            ['student_name' => 'Sakshi Singh', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-11-07', 'yearly_fees' => 700],
            ['student_name' => 'Arjun Roy', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-11-06', 'yearly_fees' => 500],
            ['student_name' => 'Ritika Shah', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-11-05', 'yearly_fees' => 600],
            ['student_name' => 'Deepak Patil', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-11-04', 'yearly_fees' => 700],
            ['student_name' => 'Nikita Rao', 'class_teacher_id' => 4, 'class' => '8', 'addmission_date' => '2024-11-03', 'yearly_fees' => 800],
            ['student_name' => 'Rahul Sharma', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-11-02', 'yearly_fees' => 600],
            ['student_name' => 'Anjali Jain', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-11-01', 'yearly_fees' => 500],
            ['student_name' => 'Aditya Bansal', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-10-31', 'yearly_fees' => 700],
            ['student_name' => 'Pooja Malik', 'class_teacher_id' => 4, 'class' => '8', 'addmission_date' => '2024-10-30', 'yearly_fees' => 800],
            ['student_name' => 'Vikram Pandey', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-10-29', 'yearly_fees' => 600],
            ['student_name' => 'Sonali Joshi', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-10-28', 'yearly_fees' => 500],
            ['student_name' => 'Abhinav Tyagi', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-10-27', 'yearly_fees' => 700],
            ['student_name' => 'Snehal Deshmukh', 'class_teacher_id' => 4, 'class' => '8', 'addmission_date' => '2024-10-26', 'yearly_fees' => 800],
            ['student_name' => 'Kavya Sinha', 'class_teacher_id' => 2, 'class' => '6', 'addmission_date' => '2024-10-25', 'yearly_fees' => 600],
            ['student_name' => 'Ishaan Khurana', 'class_teacher_id' => 1, 'class' => '5', 'addmission_date' => '2024-10-24', 'yearly_fees' => 500],
            ['student_name' => 'Meera Das', 'class_teacher_id' => 3, 'class' => '7', 'addmission_date' => '2024-10-23', 'yearly_fees' => 700],
        ];

        // Insert each student into the database
        foreach ($students as $student) {
            Students::create($student);
        }
    }
}
