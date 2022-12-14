<?php

namespace Database\Seeders;

use App\Models\ItServices;
use App\Models\Services;
use App\Models\Products;
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


        Services::create([
            'id' => 1,
            'icon_url' => 'displayad.jpg',
            'title' => 'ডিজিটাল স্ট্রাটেজি',
            'description' => 'আমরা আপনার সাফল্যের জন্য একটি স্ট্র্যাটেজিক রোডম্যাপ তৈরি করি....',
            'slug' => 'diplay-singla-details',
            'data_delay' => '200ms'
        ]);

        Services::create([
            'id' => 2,
            'icon_url' => 'webdevelopment.jpg',
            'title' => 'ওয়েব ডেভেলপমেন্ট',
            'description' => 'ইন্দ্রজাল ডিজিটালে আমরা সর্বাধুনিক প্রযুক্তি, শক্তিশালী প্রোসেসিং....',
            'slug' => 'web-singla-details',
            'data_delay' => '300ms'
        ]);

        Services::create([
            'id' => 3,
            'icon_url' => 'it.jpg',
            'title' => 'সমন্বিত প্রচার',
            'description' => 'ইন্দ্রজাল ডিজিটাল যেমন সব ক্ষেত্রে একই রকম উন্নত মান নিশ্চিত করতে বদ্ধপরিকর....',
            'slug' => 'itmanage-singla-details',
            'data_delay' => '400ms'
        ]);

        Services::create([
            'id' => 4,
            'icon_url' => 'socailpaid.jpg',
            'title' => 'সোশ্যাল মিডিয়া ম্যানেজমেন্ট',
            'description' => 'সামাজিক যোগাযোগ মাধ্যম বা সোশ্যাল মিডিয়া প্রোফাইল হচ্ছে....',
            'slug' => 'paidsocail-singla-details',
            'data_delay' => '500ms'
        ]);




        Products::create([
            'id' => 1,
            'icon_url' => 'E-Commerce.png',
            'title' => 'ই-বাণিজ্য',
            'description' => 'ইলেকট্রনিক কমার্স বা ই-কমার্স বা ই-বাণিজ্য একটি বাণিজ্য ক্ষেত্র যেখানে কোনো ইলেকট্রনিক সিস্টেম (ইন্টারনেট বা অন্য কোন কম্পিউটার নেটওইয়ার্ক) এর মাধ্যমে পণ্য বা সেবা ক্রয়/ বিক্রয় হয়ে থাকে।',
            'slug' => 'ecommerce-details',
            'data_delay' => '200ms'
        ]);


        Products::create([
            'id' => 2,
            'icon_url' => 'HRM.png',
            'title' => 'এইচআরএম',
            'description' => 'মানব সম্পদ ব্যবস্থাপনা একই সঙ্গে একটি অধ্যয়নের বিষয় ও ব্যবস্থাপনা কৌশল যা একটি প্রতিষ্ঠানের অভীষ্ঠ লক্ষ্যসমূহ অর্জনের জন্য আভ্যন্তরীক মানবসম্পদের সুষ্ঠু ব্যবস্থাপনা পদ্ধতির ওপর আলোকপাত করে।',
            'slug' => 'hrm-details',
            'data_delay' => '400ms'
        ]);

        Products::create([
            'id' => 3,
            'icon_url' => 'Payroll.jpg',
            'title' => 'পেরোল',
            'description' => 'পেরােল হলো একটি কোম্পানির বেতন, মজুরি, বােনাস এবং কর্তানাদির অর্থনৈতিক হিসাব। সব ব্যবসায়িক প্রতিষ্ঠানের মাস শেষে কর্মচারীদের বেতনভাতা দিতে হয়। একে পেরােল বা বেতনাদি প্রাপকের তালিকা বলা হয়',
            'slug' => 'payroll-details',
            'data_delay' => '200ms'
        ]);

        Products::create([
            'id' => 4,
            'icon_url' => 'pos2.jpg',
            'title' => 'পস সমাধান',
            'description' => 'পয়েন্ট-অফ-সেল (POS) অ্যাপ্লিকেশনগুলি একটি ব্যবসার সবচেয়ে গুরুত্বপূর্ণ সফ্টওয়্যার সিস্টেমগুলির মধ্যে একটি এবং সাধারণত "পয়েন্ট" বা অবস্থান যেখানে লেনদেন হয় সেখানে স্থাপন করা হয়।',
            'slug' => 'pos-details',
            'data_delay' => '400ms'
        ]);

        Products::create([
            'id' => 5,
            'icon_url' => 'school.png',
            'title' => 'স্কুল - কলেজ ম্যানেজমেন্ট সফটওয়্যার',
            'description' => 'স্কুল ম্যানেজমেন্ট সফটওয়্যার হল এক বিশেষ ধরনের সফটওয়্যার যা স্কুল বা এরকম প্রতিষ্ঠানগুলোর বিভিন্ন রকম কাজ যেমন ফলাফল প্রকাশ করা, গ্রেড প্রদান করা, অনলাইনে ভর্তির আবেদন গ্রহণ করা ইত্যাদি কাজ করতে সহায়তা করে। ',
            'slug' => 'school-college-details',
            'data_delay' => '500ms'
        ]);
    }
}