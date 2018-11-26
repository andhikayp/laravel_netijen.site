@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel panel-default border border-primary rounded p-5 shadow-lg">
        {{-- <div class="col-md-8"> --}}
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{ asset('storage/'.auth()->user()->avatar)}}" class="mx-auto d-block rounded-circle" style="max-width: 30%"><br><br><br><br><br><br>
                   <h3 class="font-weight-bold">Hi,   {{ Auth::user()->name }}. Welcome to NETIJEN!</h3><br><br>
        @if(count($posts)>0)
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header font-weight-bold text-center">Title of your post</div>

                <div class="card-body">
                    
                    <table class="table table-stripped">
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="{{ route('post.show', $post)}}" class="btn btn-default">Read</a></th>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
        @else
        <div class="col-md-5">
                <h4 class="font-weight-bold"><br>
                You don't have a post. <a href="{{ route('post.create') }}">Make it now!</a></h4>
        </div>
        @endif
    </div>
</div>
</div>
@endsection
