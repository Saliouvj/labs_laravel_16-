<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'nom' => 'Anderlecht',
            'address' => 'https://maps.google.com/maps?q=Anderlecht&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);
    }
}
