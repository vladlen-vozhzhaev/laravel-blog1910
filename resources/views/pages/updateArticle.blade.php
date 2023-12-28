@extends('template')
@section('title', 'Редактровать статью')
@section('content')
    <div class="col-sm-6 mx-auto my-3">
        <form action="/editArticle" method="post">
            @csrf
            <input type="hidden" name="articleId" value="{{$article->id}}">
            <div class="mb-3">
                <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{$article->title}}">
            </div>
            <div class="mb-3">
                <textarea name="contentField" class="form-control" placeholder="Контент">
                    {{$article->content}}
                </textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Сохранить изменения">
            </div>
        </form>
    </div>
@endsection
