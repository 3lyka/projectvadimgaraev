@extends('layouts.main')
@section('content')

    @foreach ($posts as $post)
     <div>{{$post->title}}</div>
     <div>{{$post->content}}</div>
     <div>{{$post->Likes}}</div>
    @endforeach

@endsection