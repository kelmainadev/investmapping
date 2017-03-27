@extends('layouts.client')

@section('content')
    @foreach($products as $product)
  <h3> <a href="#"> {{ $product->name }} </a></h3>
    <br>
        {{ $product->description }}

    @endforeach
    @endsection