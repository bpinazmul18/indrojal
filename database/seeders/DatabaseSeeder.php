<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Service::create([
            'id' => 1,
            'icon_url' => 'displayad.jpg',
            'title' => 'ডিজিটাল স্ট্রাটেজি',
            'description' => 'আমরা আপনার সাফল্যের জন্য একটি স্ট্র্যাটেজিক রোডম্যাপ তৈরি করি....',
            'slug' => 'diplay-singla-details'
        ]);

        Service::create([
            'id' => 2,
            'icon_url' => 'webdevelopment.jpg',
            'title' => 'ওয়েব ডেভেলপমেন্ট',
            'description' => 'ইন্দ্রজাল ডিজিটালে আমরা সর্বাধুনিক প্রযুক্তি, শক্তিশালী প্রোসেসিং....',
            'slug' => 'web-singla-details'
        ]);
    }
}