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
            'ieee_membership_id' => null,
            'role' => 'Admin',
            'email' => 'kareem-mokhtar@outlook.com',
            'active' => '0',
            'status' => '1'
        ]);

        User::create([
            'ieee_membership_id' => '93868979',
            'role' => 'Admin',
            'email' => 'abdelrahman.o.a@ieee.org',
            'active' => '0',
            'status' => '1'
        ]);
    }
}
