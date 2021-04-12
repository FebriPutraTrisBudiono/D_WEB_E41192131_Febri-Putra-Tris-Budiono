<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class db_absensi_ma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('absensi')->insert([
            'tgl' => '2021-04-19',
            'waktu' => '07:21:53',
            'keterangan' => 'Masuk',
            'Lokasi' => 'Tanggul-Jember',
            'id_user' => '6',
        ]);

         DB::table('info')->insert([
            'logo' => 'logo.jpg',
            'banner' => 'Banner123.jpg',
            'highlight1' => 'Selamat Datang',
            'highlight2' => 'Di Website E-Absensi',
            'highlight3' => 'Mahkamah Agung',
        ]);

        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Sekertaris',
        ]);

        DB::table('jam')->insert([
            'start' => '06:00:00',
            'finish' => '08:15:00',
            'keterangan' => 'Masuk',
        ]);

        DB::table('users')->insert([
            'nik' => '350906040299',
            'nama' => 'Febri Putra Tris B',
            'telp' => '082131916101',
            'email' => 'febript@gmail.com',
            'alamat' => 'dusun krajan rt.02 r2.05',
            'foto' => 'fotoku.jpg',
            'jabatan' => 'admin',
            'username' => 'admin',
            'password' => 'password',
            'level' => 'admin',
        ]);
        
    }
}
