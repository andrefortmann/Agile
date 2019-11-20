@extends('layouts.app')

@section('content')

    <h1>Ideas</h1>

    @if(count($ideas) > 1)
    
        @foreach ($ideas as $idea)
            
            <div>
                <h3> <a href="/ideas/{{$idea->id}}"> {{$idea->title}}</a> </h3>
            </div>
            
        @endforeach

    @else 
        <p>No ideas found</p>
    @endif
    
@endsection