<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use App\Models\Kontak;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $tb_kontak = array(
            array(
                'kontak_no' => 'AGR00001',
                'client_name' => 'SUGUS',
                'otr' => '082329488397',
                'slug' => 'addsada',
            ),

        );
        $tb_jadwal_angsuran = array(
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 1,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-01-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 2,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-02-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 3,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-03-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 4,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-04-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 5,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-05-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 6,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-06-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 7,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-07-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 8,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-08-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 9,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-09-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 10,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-10-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 11,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-11-25',
            ),
            array(
                'kontak_no' => 'AGR00001',
                'angsuran_ke' => 12,
                'angsuran_per_bulan' => '12907000',
                'tanggal_jatuh_tempo' => '2024-12-25',
            ),

        );
        foreach ($tb_jadwal_angsuran as $jadwal_angsuran) {
            Jadwal::create([
                'kontak_no' => $jadwal_angsuran['kontak_no'],
                'angsuran_ke' => $jadwal_angsuran['angsuran_ke'],
                'angsuran_per_bulan' => $jadwal_angsuran['angsuran_per_bulan'],
                'tanggal_jatuh_tempo' => $jadwal_angsuran['tanggal_jatuh_tempo'],
            ]);
        }

        foreach ($tb_kontak as $kontak) {
            Kontak::create([
                'kontak_no' => $kontak['kontak_no'],
                'client_name' => $kontak['client_name'],
                'otr' => $kontak['otr'],
                'slug' => $kontak['slug'],
            ]);
        }
    }
}
