@extends('layouts.admin')

@section('content')
    @foreach($products as $product)
    {{ $product->id }}

    <div class="content-area">
        <h3 style="text-align: center;"> Update Products</h3>
    <div>
        {{--<form method="post" action={{url('/admin/products/post/' . $product->id)}} enctype="multipart/form-data">--}}
            {{--{{ csrf_field() }}--}}
            {{--<label for="name">Name:</label>--}}
            {{--<input type="text" value="{{ $product->name }}" name="name">--}}
            {{--<label for="description">Description:</label>--}}
            {{--<input type="text" value="{{ $product->description }}" name="description" class="text-area">--}}
            {{--<label for="price">Price:</label>--}}
            {{--<input type="text" value="{{ $product->price }}" name="price">--}}
            {{--<input type="submit" value="submit" name="submit">--}}
        {{--</form>--}}

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

    {{--</div>--}}
    @endforeach
@endsection