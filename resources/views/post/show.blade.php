@extends('layouts.app')
@section('content')

	<div class="container ">
		<div class="" style="font-size: 16px; font-family: sans-serif;">Category : {{ $post->category->name}}</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-default border border-primary rounded p-5 shadow-lg">
					<div class="panel-heading text-center font-weight-bold" style="font-size: 20px; padding: 10px;">{{ $post->title}}</div><br><br><br><br>
		            <img class="mx-auto d-block img-thumbnail" src="http://localhost/crud/public/storage/public/avatar/{{$post->avatar}}" alt="" style="width: 70%"><br><br>
					<div class="panel-body text-justify">
						<p>{{ $post->content}}</p>
					</div>
				</div>
				<div class="panel panel-default"><br><br>
					<div class="panel-heading">
						Tambahkan Komentar
					</div><br>
					<div class="panel-body">
						<form action="{{route('post.comment.store',$post)}}" method="POST" class="form-horizontal">
							{{csrf_field()}}
							<div class="form-grup">
								<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Add Your Comments..."></textarea>
							</div><br>
							<div class="form-group text-right">
								<input type="submit" value="Submit" class="btn btn-primary">
							</div>
						</form>
						<br><br>
						@foreach($post->comments()->get() as $comment)
							<div class="media border p-3">
							  <img src="{{ asset('storage/'.$comment->user->avatar)}}" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
							  <div class="media-body">
							    {{$comment->user->username}} - {{$comment->created_at->diffForHumans()}}
							    <p>{{$comment->message}}</p>
							  </div>
							</div><br>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>    
@endsection