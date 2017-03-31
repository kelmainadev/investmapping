@extends('layouts.client')

@section('content')
    <div class="small-12 large-10 content-area">
        <div style="display: block;">

            <form method="get" action="{{url('client/investsearch')}}" style="width: 200%;">
                <input type="text" name="search" placeholder="Enter amount to Invest">
                <select name="years">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <input type="submit" value="search investment" class="button expanded">
            </form>
        </div>
    </div>
@endsection