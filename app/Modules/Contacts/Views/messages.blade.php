
@extends('layouts.app')

@section('title')All messages @endsection

@section('content')
    <h1>All messages</h1>
    @foreach($data as $item)
        <div class="alert alert-info">
            <h3>{{$item->subject}}</h3>
            <p>{{$item->email}}</p>
            <p><small>{{$item->created_at}}</small></p>
            <a href="{{route('contact-data-one', $item->id)}}">
                <button class="btn btn-warning">Read more</button>
            </a>
        </div>
    @endforeach
@endsection
