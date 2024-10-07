<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'APPConsumer01';
        $user->email = 'appconsumer@email.com';
        $user->password = bcrypt('H12345678');
        $user->save();
    }
}
