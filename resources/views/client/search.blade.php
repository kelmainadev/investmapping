@extends('layouts.client')

@section('content')
    <div class="content-area" data-equalizer data-equalize-on="large" id="test-eq">
        <h2> Search Results</h2>
        <div class="row" data-equalizer data-equalize-on="large" id="test-eq">
            @foreach($products as $product)
                <div class="columns large-6">
                    <hr>
                    <div class="card" style="width: 300px;">
                        <div class="card-divider">
                            {{ $product->name }}
                        </div>
                        <div class="card-section">
                            {{ $product->description }}
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            {{ $product->price }}
                        </div>
                        <div class="card-divider">
                            <a @click="productSelection({{ $product->id }})" href="" class="button expanded">Invest</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>


@endsection