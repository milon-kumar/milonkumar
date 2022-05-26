<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Services;
use App\Models\User;
use App\Models\Work;
use App\Models\WorkCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::factory(1)->create([
             'name' => 'Milon Kumar',
             'email' => 'example@gmail.com',
             'password'=>Hash::make('12345678'),
         ]);

        Gallery::factory(3)->create();
        Services::factory(10)->create();
        WorkCategory::factory(10)->create();
        Work::factory(10)->create();
    }
}
