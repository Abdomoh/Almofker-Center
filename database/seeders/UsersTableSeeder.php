<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Dr. Jihan Al-Naeem Musa ',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345'),
        ]);
        
    }
}
