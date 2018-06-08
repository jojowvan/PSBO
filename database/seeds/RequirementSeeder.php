<?php

use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements')->insert([
            'scholarship_id'    => '1',
            'gda'               => '3.00',
            'semester'          => '1-6',
            'deadline'          => '2018-12-20',
            'faculty'           => 'Semua Fakultas',
            'program'           => 'S1',
        ]);
    }
}
