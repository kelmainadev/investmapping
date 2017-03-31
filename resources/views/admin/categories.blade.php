@extends('layouts.admin')

@section('content')
    <div class="content-area">
        <div class="large-6 columns">
            @if(session('saved_successfully'))
                <div class="success callout">Products successfully saved</div>
            @endif
        </div>
        <div>
            <a href=""><u><h3> Create a Category</h3></u></a>
        </div>
        {!! Form::open(['url' => url('/admin/categories/store')]) !!}
        {{ Form::label('name', 'Category  Name') }}
        {{Form::text('name', null, array('class'=>'form')) }}
        {{ Form::label('description', 'Category Description') }}
        {{Form::textarea('description', null, array('class'=>'form')) }}

        {{ Form::submit('Save',array('class'=>'button'))}}
        {!! Form::close() !!}
    </div>


@endsection