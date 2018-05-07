@extends('registration/layout')

@section('classes')
    <link href="css/registration-success.css" rel="stylesheet">
@endsection

@section('content')
    <main role="main" class="container" style="margin-top: 3rem;">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Спасибо, за регистрацию!</h4>
            <p>Мы отправили письмо на {{ $email }}, подтвердите ваш email.</p>
            <hr>
            <p class="mb-0"><a href="/">Вернуться на главную страницу</a></p>
        </div>
    </main>
@endsection