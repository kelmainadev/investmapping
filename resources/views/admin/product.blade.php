@extends('layouts.admin')

@section('content')
    <div class="large-6 columns">
        @if(session('saved_successfully'))
            <div class="success callout">Products successfully saved</div>
        @endif
    </div>
    <div class="content-area">
        <h3 style="text-align: center;"> add Products</h3>
        {!! Form::open(['url' => url('/admin/product/store')]) !!}

         {{ Form::label('category', 'Category') }}

        <select name="category_id" >
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
        {{ Form::label('name', 'Product Name') }}
        {{Form::text('name', null, array('class'=>'form')) }}
        {{ Form::label('price', 'Product Price') }}
        {{Form::text('price', null, array('class'=>'form')) }}
        {{ Form::label('description', 'Product Description') }}
        {{Form::textarea('description', null, array('class'=>'form')) }}

        {{ Form::submit('Save',array('class'=>'button'))}}
        {!! Form::close() !!}
    </div>




@endsection