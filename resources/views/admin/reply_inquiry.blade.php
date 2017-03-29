@extends('layouts.admin')

@section('content')

    <div class="content-area">
        <div class="row">
            <div class="columns large-11 ">
                @foreach($inquiries as $inquiry)
                    <h2>{{ $inquiry->title }}</h2>
                    <br>
                    <p>{{ $inquiry->description }}</p>
                    <p>from <a href="#">{{ $inquiry['clients']->name }}</a> </p>
                <h5>Reply for enquiry</h5>
                <hr>
                {!! Form::open(['url' => url('admin/replies/'.$inquiry->id )]) !!}
                {{ Form::label('title', 'Subject of Enquiry') }}
                {{Form::text('title', null, array('class'=>'form')) }}
                {{ Form::label('content', 'Inquiry Description') }}
                {{Form::textarea('content', null, array('class'=>'form')) }}

                {{ Form::submit('Save',array('class'=>'button'))}}
                {!! Form::close() !!}
                @endforeach
            </div>
        </div>
    </div>
    @endsection