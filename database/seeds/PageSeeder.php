<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name' => 'Home',
                'is_public' => false,
                'is_password_protected' => true,
                'cover_image' => 'cda-interview-guide.jpg',
                'meta_title' => 'Home Page',
                'meta_description' => 'Home Page',
            ],
            [
                'name' => 'Contact Us',
                'is_public' => false,
                'is_password_protected' => false,
                'cover_image' => 'contact-us.png',
                'meta_title' => 'Contact Us',
                'meta_description' => 'Contact Us',
            ],
        ];

        foreach ($pages as $page) {
            \App\Models\Page::create([
                'name' => $page['name'],
                'is_public' => $page['is_public'],
                'is_password_protected' => $page['is_password_protected'],
                'cover_image' => $page['cover_image'],
                'meta_title' => $page['meta_title'],
                'meta_description' => $page['meta_description'],
            ]);
        }
    }
}
