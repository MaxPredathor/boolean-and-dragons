<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/data/users.json');
        $content = json_decode($json, true);
        foreach ($content as $userData) {
            $item = new User();
            $item->name = $userData['name'];
            $item->email = $userData['email'];
            $item->username = $userData['username'];
            $item->password = bcrypt($userData['password']);
            $item->save();
        }
    }
}
