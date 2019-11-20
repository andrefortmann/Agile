@extends('layouts.app')

@section('content')

    <h1>{{$idea->title}}</h1>
    <h4>{{$idea->keyword}}</h4>
    <div>
        {{$idea->abstract}}
    </div>
    <div>
        {{$idea->description}}
    </div>
    <small>Date of creation {{$idea->created_at}}</small>
    
@endsection