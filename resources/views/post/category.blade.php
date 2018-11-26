@extends('layouts.app')

@section('content')
@if($users!=null)

	<div class="">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<form class="form-inline" action="{{route('post.search')}}" method="get">
	        		<span class="">
	       				<input type="search" name="search" class="form-control mr-3" placeholder="Search Your Post">
	      				<button type="submit" class="btn btn-primary">Search</button>
	       			</span>
	       		</form><br><br>
	       		<h3 class="text-center font-weight-bold">@foreach ($cat as $cats){{ $cats->name}}@endforeach Category</h3><br><br><br>
	            @foreach ($users as $post)
	            	<div class="card">
		                <div class="card-header">
		                	<div class="col-md-4 col-sm-4">
		                		<img src="http://localhost/crud/public/storage/public/avatar/{{$post->avatar}}" alt="" style="width: 100%">
		                	</div>
		                	<a href="{{-- {{ route('post.show', $post)}} --}}">{{ $post->title}}</a> {{ $post->created_at}} <br> {{ date('F d, Y',strtotime($post->created_at)) }} at {{ date('g:ia',strtotime($post->created_at)) }}
		                </div>
		                <div class="card-body">
		                    <p>
		                    	{{ str_limit($post->content, 300, ' ...')}}
		                    </p>
		                </div>
		            </div><br>
				@endforeach
				{{-- {!! $result->render()!!}
				{{ $result->render()}} --}}
	        </div>
	    </div>
	</div>
@else
	<div class="container">
		<div class="aler alert-success">Data yang anda cari tidak ditemukan</div>
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
