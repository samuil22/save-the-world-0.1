<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Samiul Haque Siddique',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678')
        ];
        Admin::create($admin);
    }
}
