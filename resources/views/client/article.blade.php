@extends('layouts.clientapp')

@section('content')
    <div class="content-area">
        <div class="row">
            <div class="columns large-9">
                @foreach($products as $product)
                    <h3><a href="#"> <u>{{ $product->name }}</u> </a></h3>
                    <br>
                    <p>{{ $product->description }}</p>

                @endforeach
            </div>
        </div>
    </div>
@endsection