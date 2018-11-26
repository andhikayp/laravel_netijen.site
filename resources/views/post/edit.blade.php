@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<a href="/crud/public/post" class="btn btn-default">Go back</a>
					<div class="panel-heading">
						Edit Post
					</div>
					<div class="panel-body">
						<form action="{{ route('post.update', $post)}}" method="post" class="" enctype="multipart/form-data">
							{{ csrf_field()}} 
							{{ method_field('PATCH')}}
							<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control"name="title" placeholder="Post title" value="{{ $post->title}}">
							</div>
							<div class="form-group">
								<label for="">Category</label>
								<select name="category_id" id="" class="form-control">
									@foreach ($categories as $category)
										<option value="{{ $category->id}}"
											@if($category->id === $post->category_id)
												selected
											@endif
											>{{ $category->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group row">
					           	<label for="avatar" class="col-md-4 col-form-label text-md-right">Image</label>
					            <div class="col-md-6">
					                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar">
									@if ($errors->has('avatar'))
					                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('avatar') }}</strong></span>
					           		@endif
					            </div>
					        </div> 
							<div class="form-group">
								<label for="">Content</label>
								<textarea class="form-control" name="content" id="article-ckeditor" cols="" rows="5" placeholder="Post content">{{ $post->content}}</textarea>
							</div>
							<div class="form-group">
							 	<input type="submit" value="Save" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>    
@endsection