@extends('layouts.admin')

@section('content')
    <div class="content-area">
        <h3>Product Performance</h3>
        <hr>
        <div class="row">
            <div class="column large-9">
                    <table>
                        <thead>
                        <tr>

                            <th >Product Name</th>
                            <th>Product Price</th>
                            <th >Product Performance Index</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->count }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>



            </div>
        </div>
    </div>
    @endsection