<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kabupaten = 1;

        Kecamatan::create([
            'nama' => 'Lolak',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Poigar',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Lolayan',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Passi Timur',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Passi Barat',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga Utara',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga Barat',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga Tengah',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga Tenggara',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Dumoga Timur',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Bolaang Timur',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Bolaang',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Sangtombolang',
            'kabupaten_id' => $kabupaten
        ]);

        Kecamatan::create([
            'nama' => 'Bilalang',
            'kabupaten_id' => $kabupaten
        ]);
    }
}
