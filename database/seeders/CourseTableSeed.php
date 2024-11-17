<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;

class CourseTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Courses::create([
                'title' => "Course $i", 
                'description' => "This is the description for course $i.",
                'image' => 'https://via.placeholder.com/150',
                'category_id' => rand(1, 20), 
                'teacher_id' => rand(1, 5), 
                'price' => rand(100, 1000), 
            ]);
        }
    }
}
