<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UpdateMhs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->update(['kelas_id'=>1]);
    }
}
