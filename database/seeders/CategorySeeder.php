<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Predefined categories to insert
        $categories = [
            [
                'name' => 'Software Development and Engineering',
                'description' => 'Professionals involved in software creation and engineering tasks including web, mobile, and game development.',
            ],
            [
                'name' => 'Data and AI',
                'description' => 'Professionals working with data analysis, machine learning, and AI technologies.',
            ],
            [
                'name' => 'Cloud, DevOps, and Infrastructure',
                'description' => 'Professionals handling cloud architecture, DevOps practices, and IT infrastructure.',
            ],
            [
                'name' => 'Security and Compliance',
                'description' => 'Roles related to security of IT systems and ensuring compliance.',
            ],
            [
                'name' => 'Management, Design, and Support',
                'description' => 'Roles involving management, UX/UI design, and IT support services.',
            ],
        ];

        // Insert each category into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
