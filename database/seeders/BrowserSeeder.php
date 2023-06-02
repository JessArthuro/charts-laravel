<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Browser;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array('name' => 'Chrome', 'percentage' => 70.8),
            array('name' => 'Edge', 'percentage' => 14.8),
            array('name' => 'Firefox', 'percentage' => 4.9),
            array('name' => 'Safari', 'percentage' => 2.6),
            array('name' => 'Opera', 'percentage' => 1.4),
            array('name' => 'Sogou Explorer', 'percentage' => 0.8),
            array('name' => 'Other', 'percentage' => 2.6)
        ];

        Browser::insert($data); //esto para insertar el array en el modelo especificado para posterior ejecutar el seeder.
    }
}
