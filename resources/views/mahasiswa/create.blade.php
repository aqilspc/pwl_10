@extends('mahasiswa.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">TambahMahasiswa</div>
<div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong>Thereweresomeproblemswithyourinput.<br>
<br>
<ul>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</ul>
</div>
@endif
<form method="post" action="{{route('mahasiswa.store')}}" id="myForm">
@csrf
<div class="form-group">
<label for="Nim">Nim</label>
<input type="text"name="nim"class="form-control"id="Nim"aria-describedby="Nim">
</div>
<div class="form-group">
<label for="Nama">Nama</label>
<input type="Nama"name="nama"class="form-control"id="Nama"aria-describedby="Nama">
</div>
<div class="form-group">
<label for="Kelas">Kelas</label>
<select class="form-control" name="kelas_id">
	@foreach($kelas as $k)
	<option value="{{$k->id}}">{{$k->nama_kelas}}</option>
	@endforeach
</select>
</div>
<div class="form-group">
<label for="Jurusan">
Jurusan
</label>
<input type="Jurusan"name="jurusan"class="form-control"id="Jurusan"aria-describedby="Jurusan">
</div>
<div class="form-group">
<label for="No_Handphone">No_Handphone</label>
<input type="No_Handphone"name="no_handphone"class="form-control"id="No_Handphone"aria-describedby="No_Handphone">
</div>
<div class="form-group">
<label for="No_Handphone">Email</label>
<input type="email"name="email"class="form-control"id="No_Handphone"aria-describedby="No_Handphone">
</div>
<div class="form-group">
<label for="No_Handphone">Tgl Lahir</label>
<input type="date"name="tanggal_lahir"class="form-control"id="No_Handphone"aria-describedby="No_Handphone">
</div>
<button type="submit"class="btn btn-primary">Submit
</button>
</form>
</div>
</div>
</div>
</div>
@endsection