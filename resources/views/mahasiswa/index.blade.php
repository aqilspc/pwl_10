@extends('mahasiswa.layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
		</div>
		<div class="float-rightmy-2">
		<a class="btn btn-success"href="{{route('mahasiswa.create')}}">Input Mahasiswa</a>
	</div>
</div>
</div>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}
</p>
</div>
@endif
<form method="post" action="{{url('cari')}}" id="myForm">
@csrf
	<div class="form-group">
	<label for="Nim">Cari</label>
	<input type="text"name="nim"class="form-control"id="Nim"aria-describedby="Nim"  placeholder="Cari bedasarkan nim">
	</div>
	<button type="submit" class="btn btn-success mt-3">
cari
</button>
</form> 

<table class="table table-bordered">

<tr>
	<th>No</th>
	<th>Nim</th>
	<th>Nama</th>
	<th>Kelas</th>
	<th>Jurusan</th>
	<th>No_Handphone</th>
	<th>Email</th>
	<th>Tanggal Lahir</th>
	<th width="280px">Action</th>
</tr>
@foreach($posts as $index => $mahasiswa)
<tr>
	<td>{{$index + $posts->firstItem()}}</td>
	<td>{{$mahasiswa->nim}}</td>
	<td>{{$mahasiswa->nama}}</td>
	<td>{{$mahasiswa->kelas->nama_kelas}}</td>
	<td>{{$mahasiswa->jurusan}}</td>
	<td>{{$mahasiswa->no_handphone}}</td>
	<td>{{$mahasiswa->email}}</td>
	<td>{{$mahasiswa->tanggal_lahir}}</td>
	<td>
		
		<form action="{{route('mahasiswa.destroy',['mahasiswa'=>$mahasiswa->id])}}"method="POST">

		<a class="btn btn-info"href="{{route('mahasiswa.show',['mahasiswa'=>$mahasiswa->id])}}">Show</a>

		<a class="btn btn-primary"href="{{route('mahasiswa.edit',['mahasiswa'=>$mahasiswa->id])}}">Edit</a>

		<a class="btn btn-warning"href="{{url('nilai/'.$mahasiswa->id)}}">Nilai</a>
		@csrf
		@method('DELETE')
		<button type="submit"class="btn btn-danger">Delete</button>
	</form>

</td>
</tr>
@endforeach

</table>
{{$posts->links()}}
@endsection