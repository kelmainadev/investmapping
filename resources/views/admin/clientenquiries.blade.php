@extends('layouts.admin')

@section('content')
    <div class="content-area">
        <div class="row">
            <div class="columns large-9">
                <table>
                    <thead>
                    <tr>
                        <th >enquiry Title</th>
                        <th>From</th>
                        <th>Content</th>
                        <th>Sent at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->title }}</td>
                        <td>{{ $inquiry['clients']->name }}</td>
                        <td>{{ $inquiry->description }}</td>
                        <td>{{ $inquiry->created_at->diffForHumans() }}</td>
                        <td><a href="{{url('admin/reply_'.$inquiry->id)}}"> Reply</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection