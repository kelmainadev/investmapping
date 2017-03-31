@extends('layouts.client')

@section('content')
    <div class="content-area">
        <a href=""><u><h4>{{ $inquiry->title }}</h4></u></a>
        <br>
        {{ $inquiry->description }}

        <hr>
        <div style="border: 1px; width: 100%">
            <a><u><h3> Reply for your Issue</h3></u></a>
            <br>
            @foreach($replies as $reply)
                <a href=""><u><h4>{{ $reply->title }}</u></h4></a>
                <p>{{ $reply->content }}</p>
            @endforeach
        </div>
    </div>

@endsection