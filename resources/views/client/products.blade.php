@extends('layouts.client')

@section('content')
    <div class="content-area" xmlns:v-on="http://www.w3.org/1999/xhtml" >
        <form method="get" action={{ url('client/search') }} >
{{--            {{ csrf_field() }}--}}
            <input type="text" name="search" placeholder="Search for Products" width="40%">
            <input type="submit" value="Search" placeholder="Search for Products">
        </form>
        <br>
        <div id="app">
            <div class="row">

                @foreach($products as $product)
                    <div class="columns large-6">
                        <a href="/client/login"><h6>{{ $product->name }} </h6></a><br/>
                        <p>  {{ substr($product->description, 0, rand(50,100) ) .'...'}}  </p>
                        <p> Price: {{ $product->price }} </p>
                        <img src="{{ $product->image }}">
                        <a @click="productSelection({{ $product->id }})" href='show/{{ $product->id }}' class="button">Read More</a>
                        <br>
                        <hr/>
                        {{--<a href="{{ url('client/counts/'.$product->id) }}" ></a>--}}
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    {{--{{ $products->links() }}--}}
@endsection

