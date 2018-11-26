@extends('layouts.app')
@section('content')

	<div class="container">
		<form action="{{ route('post.store')}}" method="post" class="" enctype="multipart/form-data">
			{{ csrf_field()}}
			<div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : ''}}">
				<label for="">Title</label>
				<input type="text" class="form-control"name="title" placeholder="Post title" value="{{ old('title')}}">
				@if($errors->has('title'))
					<span class="help-block"><p>{{ $errors->first('title')}}</p></span>
				@endif
			</div><br>
			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control">
					@foreach ($categories as $category)
						<option value="{{ $category->id}}">{{ $category->name}}</option>
					@endforeach
				</select>
			</div> <br>
			<div class="form-group has-feedback{{ $errors->has('content') ? 'has-error' : ''}}">
				<label for="">Content</label>
				<textarea class="form-control" name="content" id='article-ckeditor' cols="" rows="5" placeholder="Post content" value="{{ old('content')}}"></textarea>
				@if($errors->has('content'))
					<span class="help-block"><p>{{ $errors->first('content')}}</p></span>
				@endif
			</div><br>
			<div class="form-group">
	           	<label for="avatar" >Image</label>
	           	<div class="custom-file">
				    <input type="file" class="custom-file-input form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" id="avatar" name="avatar">
				    @if ($errors->has('avatar'))
	                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('avatar') }}</strong></span>
	           		@endif
				    <label class="custom-file-label" for="customFile">Choose file</label>
				  </div> 
	        </div><br><br>
			<div class="form-group"><input type="submit" value="Save" class="btn btn-primary"></div>
		</form>
	</div>    
@endsection

