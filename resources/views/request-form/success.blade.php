@extends('request-form/layout')

@section('content')
    <main role="main" class="container" style="margin-top: 3rem;">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Спасибо, ваша заявка отправлена!</h4>
            <p>{{ $name }}, вы успешно отправили заявку для сайта "{{ $site }}". Мы свяжемся с вами в ближайшее время.</p>
            <hr>
            <p class="mb-0"><a href="/">Вернуться на главную страницу</a></p>
        </div>
    </main>
@endsection