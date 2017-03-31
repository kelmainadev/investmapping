@extends('layouts.admin')

@section('content')
    <div class="content-area">
        <div>
            <table>
                <thead>
                <tr>
                    <th>Product name</th>
                    <th> Product Description</th>
                    <th>Product price</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{ url('/admin/products/edit_'.$product->id)}}" class="button">Edit</a></td>
                        <td><a href="admin/product/delete" class="button alert">Delete</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
    {{ $products->links() }}

@endsection