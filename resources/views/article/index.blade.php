@extends('article.layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
		</div>
		<div class="float-right my-2">
		<a class="btn btn-success"href="{{route('article.create')}}">Input article</a>
	</div>
			<div class="float-left my-2">
		<a class="btn btn-info" target="_blank" href="{{url('article/cetak_pdf')}}">Export article</a>
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

<table class="table table-bordered">

<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Isi</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
@foreach($article as $a)
<tr>
<td>
						{{ $loop->iteration}}
					</td>
					<td>{{$a->title}}</td>
					<td>{{$a->content}}</td>
					<td>
						<img width="150px" src="{{asset('storage/'.$a->featured_image)}}">
					</td>
	<td>
		
		<form action="{{route('article.destroy',['article'=>$a->id])}}"method="POST">
		<a class="btn btn-primary"href="{{route('article.edit',['article'=>$a->id])}}">Edit</a>
		@csrf
		@method('DELETE')
		<button type="submit"class="btn btn-danger">Delete</button>
	</form>

</td>
</tr>
@endforeach

</table>
@endsection