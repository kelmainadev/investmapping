@extends('layouts.client')

@section('content')
    <div class="content-area" id="app">
        <div class="row">
            <div class="columns large-9">
                <a href=""><h5>Submit an Inquiry to about our products to our financial advisers</h5></a>
                <hr>
                {!! Form::open(['url' => url('client/store')]) !!}

                {{ Form::label('title', 'Subject of Inquiry') }}
                {{Form::text('title', null, array('class'=>'form')) }}
                {{ Form::label('description', 'Inquiry Description') }}
                {{Form::textarea('description', null, array('class'=>'form')) }}
                {{--<a @click="Sendmail" class="button" >save</a>--}}
                {{ Form::submit('Save',array('class'=>'button'))}}
                {!! Form::close() !!}
            </div>
            <div class="columns large-3">
                <h5>My recent Inquiries</h5>
                @foreach($inquiries as $inquiry)
                    <a href='show/inquiries/{{ $inquiry->id }}'>{{ $inquiry->title }}</a>
                    <hr>
                @endforeach
            </div>
        </div>


    </div>
@endsection