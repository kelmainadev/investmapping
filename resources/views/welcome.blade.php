@extends('layouts.app')

@section('content')
    <div class="content-area">
        <div class="w3-content w3-display-container image-area">
            @foreach($images as $image)
                <img class="mySlides w3-animate-fading" src="{{ $image->image }}"
                     style="width:100%">
            @endforeach
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <div style="margin-top: 20px;">
            <h4 style="text-align: center"> Our Products</h4>
            <div class="row welcome-content" data-equalizer data-equalize-on="large" id="test-eq">
                @foreach($products as $product)
                    <div class="columns large-6"><br>
                        <a href="/products/{{ $product->id }}"><h6>{{ $product->name }} </h6></a>
                        <p>  {{ substr($product->description,0,100) }} </p>
                        <b><p> Price: {{ $product->price }} </p></b>
                        <a href='client/show/{{ $product->id }}' class="button"> Make Investment</a>
                        <hr>

                    </div>
                @endforeach
                    {{ $products->links() }}
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')


@endsection