<?php

use Illuminate\Database\Seeder;

use App\Candidate;

use App\User;

class EmptySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'ieee_membership_id' => '0',
            'role' => 'Candidate',
            'email' => 'empty@candidate.com',
            'password' => bcrypt('#Q<KtJ6ch;pY,S!C'),
            'active' => '1',
            'status' => '1'
        ]);

        Candidate::create([
            'ieee_membership_id' => '0',
            'guc_id' =>'0',
            'position' => 'President',
            'personal_email' => '0',
            'guc_email' => '0',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'votes' => 0,
            'status' => '1',
            'user_id' => '1',
            'image_url' => 'http://photos.gograph.com/thumbs/CSP/CSP993/k15333509.jpg'
        ]);

        Candidate::create([
            'ieee_membership_id' => '1',
            'guc_id' =>'1',
            'position' => 'Vice President',
            'personal_email' => '1',
            'guc_email' => '1',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'votes' => 0,
            'status' => '1',
            'user_id' => '1',
            'image_url' => 'http://photos.gograph.com/thumbs/CSP/CSP993/k15333509.jpg'
        ]);

        Candidate::create([
            'ieee_membership_id' => '2',
            'guc_id' =>'2',
            'position' => 'Treassurer',
            'personal_email' => '2',
            'guc_email' => '2',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'votes' => 0,
            'status' => '1',
            'user_id' => '1',
            'image_url' => 'http://photos.gograph.com/thumbs/CSP/CSP993/k15333509.jpg'
        ]);

        Candidate::create([
            'ieee_membership_id' => '3',
            'guc_id' =>'3',
            'position' => 'Secretary',
            'personal_email' => '3',
            'guc_email' => '3',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'votes' => 0,
            'status' => '1',
            'user_id' => '1',
            'image_url' => 'http://photos.gograph.com/thumbs/CSP/CSP993/k15333509.jpg'
        ]);
    }
}
