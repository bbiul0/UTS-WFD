<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\Pesanan;


class JadwalSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
        public function run()
    {
        // $slots = ['09:00','11:00','13:00','15:00','17:00','19:00','21:00','23:00'];
        
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '09:00',
            'jam_selesai'=> '11:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '11:00',
            'jam_selesai'=> '13:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '13.00',
            'jam_selesai'=> '15:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '15:00',
            'jam_selesai'=> '17:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '17:00',
            'jam_selesai'=> '19:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '19:00',
            'jam_selesai'=> '21:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '1',
            'jam_mulai'=> '21:00',
            'jam_selesai'=> '23:00'
        ]);

        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '09:00',
            'jam_selesai'=> '11:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '11:00',
            'jam_selesai'=> '13:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '13.00',
            'jam_selesai'=> '15:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '15:00',
            'jam_selesai'=> '17:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '17:00',
            'jam_selesai'=> '19:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '19:00',
            'jam_selesai'=> '21:00'
        ]);
        Jadwal::create([
            'nomor_lapangan' => '2',
            'jam_mulai'=> '21:00',
            'jam_selesai'=> '23:00'
        ]);
        
        
    }

}


