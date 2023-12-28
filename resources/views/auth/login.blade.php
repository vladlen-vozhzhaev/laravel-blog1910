@extends('template')
@section('title', 'Авторизация')
@section('content')
    <div class="col-sm-6 my-3 mx-auto">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" placeholder="Пароль">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Войти">
            </div>
        </form>
    </div>
@endsection
