<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::factory()->times(5)->create();
    }
}
