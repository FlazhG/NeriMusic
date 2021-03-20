<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Genero;
        $genero -> nombre_genero = "rock";
        $genero->save();

        $genero2 = new Genero;
        $genero2 -> nombre_genero = "Pop";
        $genero2->save();

        $genero3 = new Genero;
        $genero3 -> nombre_genero = "Banda";
        $genero3->save();

        $genero4 = new Genero;
        $genero4 -> nombre_genero = "Electronica";
        $genero4->save();

        $genero5 = new Genero;
        $genero5 -> nombre_genero = "Jazz";
        $genero5->save();

        $genero6 = new Genero;
        $genero6 -> nombre_genero = "Dupstep";
        $genero6->save();

        $genero7 = new Genero;
        $genero7 -> nombre_genero = "Clasica";
        $genero7->save();

        $genero8 = new Genero;
        $genero8 -> nombre_genero = "Country";
        $genero8->save();

        $genero9 = new Genero;
        $genero9 -> nombre_genero = "Reggae";
        $genero9->save();

        $genero10 = new Genero;
        $genero10 -> nombre_genero = "Hip-Hop";
        $genero10->save();

        $genero11 = new Genero;
        $genero11 -> nombre_genero = "Reggaeton";
        $genero11->save();

        $genero12 = new Genero;
        $genero12 -> nombre_genero = "Cumbia";
        $genero12->save();

        $genero13 = new Genero;
        $genero13 -> nombre_genero = "Banda";
        $genero13->save();

        $genero14 = new Genero;
        $genero14 -> nombre_genero = "Blues";
        $genero14->save();

        $genero15 = new Genero;
        $genero15 -> nombre_genero = "Salsa";
        $genero15->save();

        $genero16 = new Genero;
        $genero16 -> nombre_genero = "Rap";
        $genero16->save();

        $genero17 = new Genero;
        $genero17 -> nombre_genero = "Bachata";
        $genero17->save();
    }
}
