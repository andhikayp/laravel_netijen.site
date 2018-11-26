@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-3">
            <div class="card">
				<div class="card-header">
					<h3 class="text-center">{{auth()->user()->name}}</h3><br>
					<img src="{{ asset('storage/'.auth()->user()->avatar)}}" alt="" style="width: 150px;height: 150px;border-radius: 50%;" class="mx-auto d-block">
					@if(auth()->user()->avatar!='avatars/default.png')<br><br>
                       	<a href="{{route('avatar.delete')}}" class="btn btn-primary text-white" onclick="event.preventDefault(); document.getElementById('remove-avatar').submit();">Delete Profile</a>
                    @endif
				</div>
				
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? auth()->user()->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                            <div class="col-md-6 custom-file">
                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" required>
                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route('avatar.delete')}}" id="remove-avatar" method="POST">
                    	{{csrf_field()}}
                    	{{method_field('DELETE')}}
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
