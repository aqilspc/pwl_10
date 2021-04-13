@extends('article.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">Tambah article</div>
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
<form method="post" action="{{route('article.store')}}" id="myForm" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<label for="title">Title: </label>
	<input type="text" class="form-control" required="required" name="title">
</br>
<label for="content">Content: </label>
<textarea type="text" class="form-control" required="required" name="content"></textarea>
</br>
<label for="image">Feature Image: </label>
<input type="file" class="form-control" required="required" name="image">
</br>
<button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
</form>
</div>
</div>
</div>
</div>
@endsection