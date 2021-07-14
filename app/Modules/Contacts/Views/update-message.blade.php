@extends('layouts.app')

@section('title')Update message @endsection

@section('content')
    <h1>Update message</h1>

    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="mb-3 w-50">
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" value="{{$data->name}}">
        </div>
        <div class="mb-3 w-50">
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" value="{{$data->email}}">
        </div>
        <div class="mb-3 w-50">
            <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter message subject" value="{{$data->subject}}">
        </div>
        <div class="mb-3 w-50">
            <textarea class="form-control" name="message" id="message" placeholder="Enter your message">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update message</button>
    </form>
@endsection
