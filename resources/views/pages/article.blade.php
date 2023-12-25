@extends('template')
@section('title', $article->title)
@section('content')
    <div>{{$article->content}}</div>
    <p>{{$article->created_at}}</p>
@endsection
