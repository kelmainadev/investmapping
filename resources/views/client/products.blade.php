@extends('layouts.client')

@section('content')
    <div class="content-area" xmlns:v-on="http://www.w3.org/1999/xhtml">
        <form method="get" action={{ url('client/search') }} >
            {{--            {{ csrf_field() }}--}}
            <input type="text" name="search" placeholder="Search for Products" width="40%">
            <input type="submit" value="Search" placeholder="Search for Products">
        </form>
        <br>
        <div id="redirect">
            <div class="row" data-equalizer data-equalize-on="large" id="test-eq">

                @foreach($products as $product)
                    <div class="large-">
                        <hr/>
                        <a @click="productSelection({{ $product->id }})" href='show/{{ $product->id }}'>
                        <h6>{{ $product->name }} </h6></a><br/>
                        <p>  {{ substr($product->description, 0, rand(100,150) ) .'...'}}  </p>
                        <p> Price: {{ $product->price }} </p>
                        <a @click.="productSelection({{ $product->id }})" href='show/{{ $product->id }}' class="button">Read
                            More</a>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    {{ $products->links() }}
@endsection

