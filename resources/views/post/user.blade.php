@extends('layouts.app')

@section('content')

@if($posts->count()>0)
	<div class="container">
		<div class="" style="font-size: 18px;" >Hasil pencarian: {{$search}}</div><br><br>
	    <div class="row justify-content-center">

	        <div class="col-md-8">
	            @foreach ($posts as $post)
	            <div class="media border p-3">
				  <img src="{{ asset('storage/'.$post->avatar)}}" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
				  <div class="media-body"><br>
				    <a href="{{ route('home.id', $post)}}" class="" style="font-size: 18px;">{{ $post->username}}</a>
				    <p>My name is {{$post->name}}</p>
				  </div>
				</div>
				@endforeach
				{!! $posts->render()!!}
	        </div>
	    </div>
	</div>
@else
	<div class="container">
		<div class="aler alert-success">Data yang anda cari tidak ditemukan {{-- {{$result}} {{$result->content}} --}}</div>
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<div class="col-md-4">
	        		<form action="{{route('post.search')}}" method="get">
	        			<class class="form-group">
	        				<input type="search" name="search" class="form-control">
	        				<span class="form-group-btn">
	        					<button type="submit" class="btn btn-primary">Search</button>
	        				</span>
	        			</class>
	        		</form>
	        	</div>
	        </div>
	    </div>
	</div>
@endif
@endsection 