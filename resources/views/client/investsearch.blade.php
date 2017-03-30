@extends('layouts.admin')
@section('content')
    <div class="content-area">
        <div>
            <h3> Maximum yields for your Investment</h3>
            <br>
            <hr>
            <br>
        </div>
        <table>
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Yield</th>
                <th>Total Earnings</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ substr($product->description,0,70) }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->price * $years/10 * $product->rates }}</td>
                    <td>{{ $product->price * $years/10 * $product->rates +$amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection