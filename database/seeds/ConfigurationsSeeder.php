<?php

use Illuminate\Database\Seeder;

use App\Configuration;

use Carbon\Carbon;

class ConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'name' => 'applicationsFrom',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'applicationsTo',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'deliverablesFrom',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'deliverablesTo',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'electionsFrom',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'electionsTo',
            'value' => ''
        ]);

        Configuration::create([
            'name' => 'results',
            'value' => Carbon::yesterday('Africa/Cairo')->toDateString()
        ]);
    }
}
