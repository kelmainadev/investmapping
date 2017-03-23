@extends('layouts.admin')

@section('content')
<div class="content-area" style="">

        @foreach($products as $product)
            <table>
                <thead>
                <tr>
                    <th >Product name</th>
                    <th> Product Description</th>
                    <th >Product price</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="#" class="button">Edit</a></td>
                    <td><a href="#" class="button alert">Edit</a></td>

                </tr>
                </tbody>
            </table>




        @endforeach

    </div>


@endsection