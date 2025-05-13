<?php

namespace Database\Seeders;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            'texto'=> 'Exemplo de nota 1',
        ]);

        DB::table('notas')->insert([
            'texto'=> 'Exemplo de nota 2',
        ]);
    }
}
