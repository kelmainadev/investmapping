@extends('layouts.client')

@section('content')

    <h2>{{ $inquiry->title }}</h2>
    <br>
    {{ $inquiry->description }}

<hr>
    <p> Reply for your Issue</p>
    @foreach($replies as $reply)
        <p>{{ $reply->title }}</p>
    @endforeach
    @endsection