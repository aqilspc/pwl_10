<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
class Kelas extends Model
{
    protected $table='kelas';
    public function mahasiswa()
    {
    	return $this->hasMany(Mahasiswa::class);
    }
}
