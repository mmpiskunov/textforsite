@extends('registration/layout')

@section('title')
    <h1 class="h3 mb-3 font-weight-normal" style="margin-top: 16px;">Регистрация партнера.</h1>
    <p>Выполните простую регистрацию и станьте партнером Textforsite.</p>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-label-group">
        <input type="text" id="inputName" name="name" class="form-control" placeholder="Имя" autofocus="" value="{{ old('name') }}">
        <label for="inputName">Имя</label>
    </div>

    <div class="form-label-group">
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email адрес" autofocus="" value="{{ old('email') }}">
        <label for="inputEmail">Email</label>
    </div>

    <div class="form-label-group">
        <input type="text" id="inputCity" name="city" class="form-control" placeholder="Город" autofocus="" value="{{ old('city') }}">
        <label for="inputCity">Город</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрировать</button>
@endsection