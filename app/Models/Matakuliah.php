<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
class Matakuliah extends Model
{
    protected $table='matakuliah';

    public function mahasiswa()
    {
    	return $this->belongsToMany(Mahasiswa::class)->withPivot('nilai');
    }
}
