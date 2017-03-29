@extends('layouts.client')

@section('content')
<div class="content-area">
    <div class="row">
        <div class="columns large-9">
            <h3>Submit an Inquiry to about our products to our financial advisors</h3>
            <hr>
            {!! Form::open(['url' => url('client/store')]) !!}

            {{ Form::label('title', 'Subject of Enquiry') }}
            {{Form::text('title', null, array('class'=>'form')) }}
            {{ Form::label('description', 'Inquiry Description') }}
            {{Form::textarea('description', null, array('class'=>'form')) }}

            {{ Form::submit('Save',array('class'=>'button'))}}
            {!! Form::close() !!}
        </div>
        <div class="columns large-3">
            <h5>My recent Inquiries</h5>
            @foreach($inquiries as $inquiry)
                <a href='show/inquiries/{{ $inquiry->id }}'>{{ $inquiry->title }}</a> <hr>
                @endforeach
        </div>
    </div>


</div>
@endsection