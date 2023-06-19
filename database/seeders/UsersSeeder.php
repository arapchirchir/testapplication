<?php

namespace Database\Seeders;

use App\Models\TestModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'kip@gmail.com',
                'first_name' => 'Denniss',
                'last_name' => 'Kimber',
            ],
            [
                'email' => 'dan@gmail.com',
                'first_name' => 'Dan',
                'last_name' => 'Kim',
            ],
        ];

        foreach ($users as $user) {
            TestModel::create([
                'email' => $user['email'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
            ]);
        }
    }
}
