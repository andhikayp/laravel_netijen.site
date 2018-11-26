@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header font-weight-bold text-center"><h3>Welcome To {{$sembarang->name}}'s Home Page</h3></div><br><br>
                    <div></div>
                @foreach ($users as $post)
                    <div class="card">

                        <div class="card-header">
                            <div class="col-md-4 col-sm-4">
                                <img src="http://localhost/crud/public/storage/public/avatar/{{$post->avatar}}" alt="" style="width: 100%">
                            </div>
                            <a class="font-weight-bold" href="{{-- {{ route('post.show', $post)}} --}}">{{ $post->title}} </a> <br>{{-- {{ $post->created_at->diffForHumans()}} --}} {{ date('F d, Y',strtotime($post->created_at)) }} at {{ date('g:ia',strtotime($post->created_at)) }} by <a href="{{ route('home.id', $post->user_id)}}"> {{ $sembarang->username}}</a> <br><br>
                                {{-- @if($post->comments()->get()->count()==1){{$post->comments()->get()->count()}} Comment
                                @endif
                                @if($post->comments()->get()->count() > 1){{$post->comments()->get()->count()}} Comments
                                @endif
                                @if($post->comments()->get()->count() ==null) Don't have a comment
                                @endif --}}
                        </div>
                        <div class="card-body">
                            <p>
                               {{--  {{ str_limit($post->content, 300, ' ...')}} --}}
                               {{$post->content}}
                            </p>
                        </div>
                    </div>
                    <br>
                @endforeach
                {{-- {!! $users->render()!!} --}}
            </div>
        </div>
    </div>
@endsection 
{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(count($users)>0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                        </tr>
                        @foreach($users as $post)
                        <tr>

                            <th>{{$post->title}}</th>
                            <th>{{$post->content}}</th>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}