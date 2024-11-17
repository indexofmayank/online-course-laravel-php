<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Teacher::create([
                'teacher_name' => "Teacher $i",
                'date_of_join' => now()->subDays(rand(0, 365))->format('Y-m-d'), 
                'subject' => "Subject " . rand(1, 10), 
            ]);
        }
    }
}
