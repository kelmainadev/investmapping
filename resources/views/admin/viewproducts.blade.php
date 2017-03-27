@extends('layouts.admin')

@section('content')
    <div class="content-area">

        @foreach($products as $product)
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
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{ url('/admin/products/edit_'.$product->id)}}" class="button">Edit</a></td>
                        <td><a href="admin/product/delete" class="button alert">Delete</a></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        @endforeach

    </div>
    {{ $products->links() }}

@endsection