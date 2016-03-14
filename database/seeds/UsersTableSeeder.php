<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ilyas Kaliyev',
            'email' => 'ilyaskaliyev@gmail.com',
            'password' => bcrypt('123456')
        ]);

        echo "Users table successfully seeded." . PHP_EOL;
    }
}
