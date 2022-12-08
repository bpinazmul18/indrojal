<?php

namespace Database\Seeders;

use App\Models\ItServices;
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
        ItServices::create([
            'id' => 1,
            'icon_url' => 'displayad.jpg',
            'title' => 'ডিজিটাল স্ট্রাটেজি',
            'description' => 'আমরা আপনার সাফল্যের জন্য একটি স্ট্র্যাটেজিক রোডম্যাপ তৈরি করি....',
            'slug' => 'diplay-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 2,
            'icon_url' => 'webdevelopment.jpg',
            'title' => 'ওয়েব ডেভেলপমেন্ট',
            'description' => 'ইন্দ্রজাল ডিজিটালে আমরা সর্বাধুনিক প্রযুক্তি, শক্তিশালী প্রোসেসিং....',
            'slug' => 'web-singla-details',
            'data_delay' => '300ms'
        ]);

        ItServices::create([
            'id' => 3,
            'icon_url' => 'it.jpg',
            'title' => 'সমন্বিত প্রচার',
            'description' => 'ইন্দ্রজাল ডিজিটাল যেমন সব ক্ষেত্রে একই রকম উন্নত মান নিশ্চিত করতে বদ্ধপরিকর....',
            'slug' => 'itmanage-singla-details',
            'data_delay' => '400ms'
        ]);

        ItServices::create([
            'id' => 4,
            'icon_url' => 'socailpaid.jpg',
            'title' => 'সোশ্যাল মিডিয়া ম্যানেজমেন্ট',
            'description' => 'সামাজিক যোগাযোগ মাধ্যম বা সোশ্যাল মিডিয়া প্রোফাইল হচ্ছে....',
            'slug' => 'paidsocail-singla-details',
            'data_delay' => '500ms'
        ]);

        ItServices::create([
            'id' => 5,
            'icon_url' => 'product-manage.jpg',
            'title' => 'ব্র্যান্ড এক্টিভেশন',
            'description' => 'ইন্দ্রজাল ডিজিটাল জানে কিভাবে একটি নতুন ব্র্যান্ডকে উপস্থাপন করতে হয়....',
            'slug' => 'product-feed-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 6,
            'icon_url' => 'info.jpg',
            'title' => 'ইনফ্লুয়েন্সার মার্কেটিং',
            'description' => 'আমরা বিশ্বব্যাপী প্রভাবশালী মার্কেটিং স্ট্রাটেজিগুলোকে ব্যবহার করি....',
            'slug' => 'domain-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 7,
            'icon_url' => 'shopingaddhgh.png',
            'title' => 'গ্রাহক বিশ্লেষণ',
            'description' => 'আপনার গ্রাহক কীভাবে সিদ্ধান্ত নেন? ডিজিটাল মিডিয়ায় তাদের....',
            'slug' => 'shopingadd-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 8,
            'icon_url' => 'digital_marketing_.png',
            'title' => 'সোশাল মিডিয়া মার্কেটিং',
            'description' => 'সবচেয়ে বিশ্বস্ত ও সুলভ ডিজিটাল মার্কেটিং এক্সপার্ট ইন্দ্রজাল....',
            'slug' => 'seo-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 9,
            'icon_url' => 'mobile.jpg',
            'title' => 'মোবাইল অ্যাপ্লিকেশন',
            'description' => 'ইন্দ্রজাল ডিজিটালে আমরা সঠিক সময়ে সঠিক সরঞ্জাম ব্যবহারকে....',
            'slug' => 'mobileapli-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 10,
            'icon_url' => 'digitalvideo.jpg',
            'title' => 'ডিজিটাল ভিডিও প্রোডাকশন',
            'description' => 'আপনি কি জানেন যে প্রায় ৮০% ইন্টারনেট ব্যবহারকারী প্রতি সপ্তাহে....',
            'slug' => 'digitalvideo-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 11,
            'icon_url' => 'ciber.jpg',
            'title' => 'সাইবার সিকিউরিটি',
            'description' => 'ইন্দ্রজাল ডিজিটাল বিশ্বাস করে, আপনার সাইবার নিরাপত্তার জন্য বাহ্যিক....',
            'slug' => 'cyber-singla-details',
            'data_delay' => '200ms'
        ]);

        ItServices::create([
            'id' => 12,
            'icon_url' => 'copywriting.png',
            'title' => 'কপিরাইটিং',
            'description' => 'কপিরাইটিং আপনার ওয়েবসাইটের সাফল্যের জন্য অন্যতম গুরুত্বপুর্ন উপাদানগুলোর মধ্যে....',
            'slug' => 'copy-singla-details',
            'data_delay' => '200ms'
        ]);
    }
}