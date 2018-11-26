@extends('layouts.app')

@section('content')
@if($posts->count()>0)
	<div class="">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
        		<form class="form-inline" action="{{route('post.search')}}" method="get">
	        		<span class="">
	        			<input type="search" name="search" class="form-control mr-3" placeholder="Search Your Post" value="{{$search}}">
	        			<button type="submit" class="btn btn-primary">Search</button>
	        		</span>
	        	</form><br><br><br>
	            @foreach ($posts as $post)
	            	<div class="card">
		                <div class="card-header">
		                	<div class="col-md-4 col-sm-4">
		                		<img src="http://localhost/crud/public/storage/public/avatar/{{$post->avatar}}" alt="" style="width: 100%">
		                	</div>
		                	<a class="font-weight-bold" href="{{ route('post.show', $post)}}">{{ $post->title}} </a> <br>{{ $post->created_at->diffForHumans()}} {{ date('F d, Y',strtotime($post->created_at)) }} at {{ date('g:ia',strtotime($post->created_at)) }} by <a href="{{ route('home.id', $post->user_id)}}"> {{ $post->user->username}}</a>
							@if( Auth::user()->username == $post->user->username)
							<div class="pull-right"><br><br>
								<a href="{{ route('post.edit', $post)}}">
									<button type="submit" class="btn btn-xs btn-outline-success btn-block">Edit</button> 
								</a><br>
								<form class="" action="{{ route('post.destroy', $post)}}" method="post">
									{{ csrf_field()}}
									{{ method_field('DELETE')}}
									<button type="submit" class="btn btn-xs btn-outline-danger btn-block">Delete</button> 
								</form>
							</div>
							@endif
		                </div>
		                <div class="card-body">
		                    <p>
		                    	{{ str_limit($post->content, 300, ' ...')}}
		                    </p>
		                </div>
		            </div>
		            <br>
				@endforeach
				{!! $posts->render()!!}
	        </div>
	    </div>
	</div>
@else
	<div class="container">
		<div class="aler alert-success">Data yang anda cari tidak ditemukan </div><br><br><br><br><br>
	    <div class="row justify-content-center">
	        	<div class="form-group">
	        		<form class="form-inline" action="{{route('post.search')}}" method="get">
	        		<span class="">
	        			<input type="search" name="search" class="form-control mr-3" placeholder="Search Your Post" value="{{$search}}">
	        			<button type="submit" class="btn btn-primary">Search</button>
	        		</span>
	        	</form><br><br><br>
	        	</div>
	    </div>
	</div>
@endif
@endsection 

