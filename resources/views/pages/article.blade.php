@extends('template')
@section('title', $article->title)
@section('content')
    <div>{{$article->content}}</div>
    <p>{{$article->created_at}}</p>
    @auth
        <p><a href="/editArticle/{{$article->id}}">[редактировать]</a></p>
    @endauth
    <hr>
    <form action="/addComment" method="post">
        @csrf
        <input type="hidden" name="articleId" value="{{$article->id}}">
        <div class="mb-3">
            <textarea name="comment" class="form-control" placeholder="Комментарий"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary">
        </div>
    </form>
    <hr>
    <div>
        @foreach($comments as $comment)
            <p class="mt-3">
                <span>Пользователь: {{$comment->user_id}}</span>
                <br>
                {{$comment->comment}}
            </p>
        @endforeach
    </div>
@endsection
