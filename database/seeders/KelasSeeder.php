<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas= [
        	['nama_kelas'=>'TI2A'],
        	['nama_kelas'=>'TI2B'],
        	['nama_kelas'=>'TI2C'],
        	['nama_kelas'=>'TI2D'],
        	['nama_kelas'=>'TI2E'],
        	['nama_kelas'=>'TI2F'],
        	['nama_kelas'=>'TI2G'],
        	['nama_kelas'=>'TI2H'],
        	['nama_kelas'=>'TI2I'],
    	];
    	DB::table('kelas')->insert($kelas);
    }
}
