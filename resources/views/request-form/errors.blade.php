@extends('request-form/layout')

@section('content')
    <main role="main" class="container" style="margin-top: 3rem;">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Ошибки в заполнении формы</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <hr>
            <p class="mb-0"><a href="/">Вернитесь</a> и заполните форму снова</p>
        </div>
    </main>
@endsection
