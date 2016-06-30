<?php

use Illuminate\Database\Seeder;

use App\Candidate;

class EmptySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create([
            'ieee_membership_id' => '0',
            'position' => 'President',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'major' => '',
            'graduation_year' => '',
            'description' => '',
            'image_url' => '',
            'votes' => 0
        ]);

        Candidate::create([
            'ieee_membership_id' => '1',
            'position' => 'Vice President',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'major' => '',
            'graduation_year' => '',
            'description' => '',
            'image_url' => '',
            'votes' => 0
        ]);

        Candidate::create([
            'ieee_membership_id' => '2',
            'position' => 'Treassurer',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'major' => '',
            'graduation_year' => '',
            'description' => '',
            'image_url' => '',
            'votes' => 0
        ]);

        Candidate::create([
            'ieee_membership_id' => '3',
            'position' => 'Secretary',
            'first_name' => 'Empty',
            'last_name' => 'Position',
            'major' => '',
            'graduation_year' => '',
            'description' => '',
            'image_url' => '',
            'votes' => 0
        ]);
    }
}
