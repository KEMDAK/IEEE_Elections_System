<?php

use Illuminate\Database\Seeder;

use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'ieee_membership_id' => '1',
            'role' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'active' => '1',
            'status' => '1'
        ]);
    }
}
