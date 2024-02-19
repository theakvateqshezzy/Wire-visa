<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $emails = [
            'asdf@gmail.com'
        ];
        

        foreach($emails as $email)
        {

            $user = User::create([
                'name' => ucfirst(explode('@', $email)[0]),
                'email' => $email,
                // 'password' => bcrypt($password),
                'password' => bcrypt('123123'),
                'email_verified_at' => Carbon::now()
            ]);
    
            $user->details()->create([]);

        }

    }
}