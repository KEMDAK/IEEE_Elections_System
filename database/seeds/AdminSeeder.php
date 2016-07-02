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
            'email' => 'dr.amr@admin.com',
            'password' => bcrypt('damrr.admin'),
            'active' => '1',
            'status' => '1'
        ]);

        User::create([
            'ieee_membership_id' => '92849112',
            'role' => 'Admin',
            'email' => 'sherifmagdyabdelhalim@gmail.com',
            'active' => '0',
            'status' => '1'
        ]);

        User::create([
            'ieee_membership_id' => '93390793',
            'role' => 'Admin',
            'email' => 'walidtarekelhefny@gmail.com',
            'active' => '0',
            'status' => '1'
        ]);
    }
}
