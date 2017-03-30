@extends('layouts.app')

@section('content')
    <div class="content-area">
        {{--<img class="orbit-image" src="{{ URL::asset('/images/cytonn.png') }}" alt="Space">--}}
{{--       <img src="{{ URL::asset('/images/cytonn.png') }}">--}}
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                <li class="is-active orbit-slide">
                    <img class="orbit-image" src="{{ URL::asset('/images/cytonn.png') }}" alt="Space">
                    <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                </li>
                <li class="orbit-slide">
                    <img class="orbit-image" src="{{ URL::asset('/images/cytonn.png') }}" alt="Space">
                    <figcaption class="orbit-caption">Lets Rocket!</figcaption>
                </li>
                <li class="orbit-slide">
                    <img class="orbit-image" src=src="{{ URL::asset('/images/cytonn.png') }}" alt="Space">
                    <figcaption class="orbit-caption">Encapsulating</figcaption>
                </li>
                <li class="orbit-slide">
                    <img class="orbit-image" src="{{ URL::asset('/images/cytonn.png') }}" alt="Space">
                    <figcaption class="orbit-caption">Outta This World</figcaption>
                </li>
            </ul>
            <nav class="orbit-bullets">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            </nav>
        </div>



        <div class="row" data-equalizer data-equalize-on="large" id="test-eq">
            @foreach($products as $product)
                <div class="columns large-6">
                    <a href="/client/login"><h6>{{ $product->name }} </h6></a><br/>
                    <hr>
                    <p>  {{ $product->description }} </p>
                    <p>{{ $product->price }} </p>
                    <img src="{{ $product->image }}">
                    <button class="button expanded">Make Investment</button>

                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>


@endsection