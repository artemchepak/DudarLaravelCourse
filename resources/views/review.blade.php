@extends('layout')

@section('title') Отзывы @endsection

@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/review/check" method="post">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control">
        </div>
        <div class="mb-3">
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <br><h1>Все отзывы</h1>

    @foreach($reviews as $element)
        <div class="allert alert-warning">
            <h3>{{$element->subject}}</h3>
            <b>{{$element->email}}</b>
            <p>{{$element->message}}</p>
        </div>
    @endforeach

@endsection
