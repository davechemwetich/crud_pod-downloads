<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'rusty',
            'email'=>'greyhat@null.net',
            'email_verified_at'=> now(),
            'password'=> bcrypt('helloworld'),
            'is_admin'=> 1,
        ]);
    }
}
