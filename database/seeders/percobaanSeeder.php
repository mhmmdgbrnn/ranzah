<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class percobaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => "Gibran",
            'addres' => "Jl. Batutulis",
            'phone' => "0823424523190"
        ]);
    }
}
