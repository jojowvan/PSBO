<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Admin::class,5)->create();
        DB::table('admins')->insert([
            'name'      => 'Jovano Akbarudin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admins'),
            'remember_token' => str_random(10),
        ]);
    }
}
