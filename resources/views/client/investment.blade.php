@extends('layouts.client')

@section('content')
    <div class="content-area">
        <div class="row">
            {{--<div class="columns large-6">--}}
            <form method="get" action="{{url('client/investsearch')}}">
                <input type="text" name="search" placeholder="Enter amount to Invest" width="40%">
                <select name="years">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <input type="submit" value="search investment" class="button expanded">

            </form>
            {{--@foreach($products as $product)--}}
                {{--{{ $product->id }}--}}
                {{--@endforeach--}}
        </div>
    </div>

@endsection