@extends('layouts.admin')

@section('content')
    @foreach($products as $product)
        <div class="content-area">
            <a href=""><u><h3 style="text-align: center;"> Update Products</h3></u></a>
            <div>
                {!! Form::open(
                    array(

                        'url' => ('/admin/products/post/' . $product->id),
                        'class' => 'form',
                        'novalidate' => 'novalidate',
                        'files' => true)) !!}

                <div class="form-group">
                    {!! Form::label('Product Name') !!}
                    {!! Form::text('name', $product->name, array('placeholder'=>'Chess Board')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Product Price') !!}
                    {!! Form::text('price', $product->price , array('placeholder'=>'Chess Board')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('description', $product->description, array('placeholder'=>'1234')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Product Image') !!}
                    {!! Form::file('image', null) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Product!') !!}
                </div>
                {!! Form::close() !!}
            </div>
     </div>
    @endforeach
@endsection