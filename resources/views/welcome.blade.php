@extends('layouts.app')

@section('content')


    <div class="row">
        @foreach($products as $product)
            <div class="columns large-6">
                <a href="/client/login"><h6>{{ $product->name }} </h6></a><br/>
                <p>  {{ $product->description }} </p>
                <p>{{ $product->price }} </p>
                <img src="{{ $product->image }}">
                <button class="button expanded">Make Investment</button>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}
@endsection