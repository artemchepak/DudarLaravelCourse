@extends('layouts.app')

@section('title')Contact @endsection

@section('content')
    <h1>Contact</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="mb-3 w-50">
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3 w-50">
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3 w-50">
            <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter message subject">
        </div>
        <div class="mb-3 w-50">
            <textarea class="form-control" name="message" id="message" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save message</button>
    </form>
@endsection
