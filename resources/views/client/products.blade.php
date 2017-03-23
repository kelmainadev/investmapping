@extends('layouts.client')

@section('content')
    <div class="row">
        @foreach($products as $product)

       <div class="columns small-6">
           <div class="card" style="width: 300px;">
               <div class="card-divider">
                   {{ $product->name }}
               </div>

               <div class="card-section">
                   {{ $product->description }}
                   <h5>{{$product->price}}</h5>
               </div>
           </div>
       </div>
    @endforeach

    </div>
@endsection