@extends('layouts.client)

@section('content')
    @foreach($products as $product)
    {{ $product->name }}
    @endsection