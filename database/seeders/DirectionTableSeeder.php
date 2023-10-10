<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Direction;
use Illuminate\Support\Facades\DB;


class DirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Direction::truncate();

        Direction::create(['nom_direction' => 'AC']);
        Direction::create(['nom_direction' => 'BIES']);
        Direction::create(['nom_direction' => 'DAF']);
        Direction::create(['nom_direction' => 'DAGC']);
        Direction::create(['nom_direction' => 'DAIJE']);
        Direction::create(['nom_direction' => 'DAM']);
        Direction::create(['nom_direction' => 'DAP']);
        Direction::create(['nom_direction' => 'DG']);
        Direction::create(['nom_direction' => 'DGA']);
        Direction::create(['nom_direction' => 'DIGC']);
        Direction::create(['nom_direction' => 'DOM']);
        Direction::create(['nom_direction' => 'DPRF']);
        Direction::create(['nom_direction' => 'Representants APMF']);
        Direction::create(['nom_direction' => 'DR APMF']);
        Direction::create(['nom_direction' => 'Num. Vert APMF']);
        Direction::create(['nom_direction' => 'IE']);
    }
}
