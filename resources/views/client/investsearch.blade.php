@extends('layouts.admin')
@section('content')
    @foreach($products as $product)
    <p>{{ $product->id }}
    {{ $product->name }}
    {{ $product->price }}</p>


    @endforeach
    {{ $years }}
    @endsection