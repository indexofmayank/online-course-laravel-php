<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Programming',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Learn programming languages like Python, JavaScript, and more.',
            ],
            [
                'name' => 'Design',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Master graphic design, UI/UX, and more.',
            ],
            [
                'name' => 'Marketing',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Become an expert in digital and content marketing.',
            ],
            [
                'name' => 'Business',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Build business strategies and entrepreneurial skills.',
            ],
            [
                'name' => 'Photography',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Capture stunning photos and edit like a pro.',
            ],
            [
                'name' => 'Music',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Learn instruments, music theory, and production.',
            ],
            [
                'name' => 'Health & Fitness',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Explore yoga, workout plans, and wellness tips.',
            ],
            [
                'name' => 'Cooking',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Master culinary skills and cooking techniques.',
            ],
            [
                'name' => 'Finance',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Understand investments, stock markets, and budgeting.',
            ],
            [
                'name' => 'Writing',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Improve creative writing, copywriting, and editing skills.',
            ],
            [
                'name' => 'Personal Development',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Boost confidence, productivity, and mindset.',
            ],
            [
                'name' => 'Tech & Gadgets',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Stay updated with the latest technology and gadgets.',
            ],
            [
                'name' => 'Gaming',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Explore gaming strategies, reviews, and tournaments.',
            ],
            [
                'name' => 'Language Learning',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Learn new languages and improve communication skills.',
            ],
            [
                'name' => 'Parenting',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Tips and tricks for effective parenting and childcare.',
            ],
            [
                'name' => 'Art & Craft',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Learn painting, sketching, and handmade crafts.',
            ],
            [
                'name' => 'Travel',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Explore travel tips and dream destinations.',
            ],
            [
                'name' => 'Lifestyle',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Enhance your lifestyle with unique ideas and trends.',
            ],
            [
                'name' => 'DIY Projects',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Create amazing DIY projects and home improvements.',
            ],
            [
                'name' => 'Science',
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Dive into scientific discoveries and experiments.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
