<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'john';
        $user->email = 'john@gmail.com';
        $user->password = bcrypt('1234');
        $user->save();

        $user = new User;
        $user->name = 'alejo';
        $user->email = 'alejo@gmail.com';
        $user->password = bcrypt('1234');
        $user->save();

        $user = new User;
        $user->name = 'client';
        $user->email = 'client@gmail.com';
        $user->password = bcrypt('1234');
        $user->save();
    }
}
