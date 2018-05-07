@extends('registration/layout')

@section('classes')
    <link href="css/registration-success.css" rel="stylesheet">
@endsection

@section('content')
    <main role="main" class="container" style="margin-top: 3rem;">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Токен не действителен</h4>
            <hr>
            <p class="mb-0"><a href="/">Вернуться на главную страницу</a></p>
        </div>
    </main>
@endsection