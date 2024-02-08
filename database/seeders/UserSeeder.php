<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $members = [
            ['id' => '1', 'fname' => 'Oluwatobi', 'lname' => 'Solomon', 'email' => 'daniel@hotmail.com', 'password' => bcrypt('solomon001')],
            ['id' => '2', 'fname' => 'Y', 'lname' => 'Date', 'email' => 'dinger@gmail.com', 'password' => bcrypt('solomon001')],
           
        ];
        $roleId = Role::where('name', 'admin')->first()->id;
        foreach($members as $user)
        {
             $user = User::updateOrCreate($user);
             Profile::create(['user_id' => $user->id, 'reg_channel' => 'direct']);
             $user->assignRole($roleId);
        }
    }
}
