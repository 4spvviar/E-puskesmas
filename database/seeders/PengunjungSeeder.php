<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use Carbon\Carbon;


class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '2203304405506601',
                'nama' => 'Hikmat',
                'telepon' => '081000111222',
                'alamat' => 'Salawu, Tasikmalaya',
                'tgl_kunjung' => Carbon::now(),
                'poli_id' => '1'
            ],

            [
                'nik' => '2203304405506602',
                'nama' => 'Muhammad Rizki',
                'telepon' => '08100011133',
                'alamat' => 'Purbaratu, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(),
                'poli_id' => '4'
            ],

            [
                'nik' => '2203304405506603',
                'nama' => 'Asep Saepudin',
                'telepon' => '081000111444',
                'alamat' => 'Papayan, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(3),
                'poli_id' => '3'
            ],

            [
                'nik' => '2203304405506604',
                'nama' => 'Dedi Supriyadi',
                'telepon' => '081000111555',
                'alamat' => 'Pamoyanan, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(2),
                'poli_id' => '6'
            ],

            [
                'nik' => '2203304405506605',
                'nama' => 'Dedi Arif',
                'telepon' => '081000111666',
                'alamat' => 'Warpeut, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '8'
            ],

            [
                'nik' => '2203304405506606',
                'nama' => 'Fajar Nugraha',
                'telepon' => '081000111666',
                'alamat' => 'Golacir, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '2'
            ],

            [
                'nik' => '2203304405506607',
                'nama' => 'Anjar',
                'telepon' => '081000111666',
                'alamat' => 'Rancak, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '1'
            ],

            [
                'nik' => '2203304405506608',
                'nama' => 'Saepuloh',
                'telepon' => '081000111666',
                'alamat' => 'Sindang Palay, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '2'
            ],

            [
                'nik' => '2203304405506609',
                'nama' => 'Aep Saepudin',
                'telepon' => '081000111666',
                'alamat' => 'Bojong, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '8'
            ],

            [
                'nik' => '2203304405506610',
                'nama' => 'Jana Saputra',
                'telepon' => '081000111666',
                'alamat' => 'Babakan, Tasikmalaya',
                'tgl_kunjung' => Carbon::now()->addDay(5),
                'poli_id' => '4'
            ]
        ];

        Pengunjung::insert($data);
    }
}
