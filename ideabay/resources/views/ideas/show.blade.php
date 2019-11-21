@extends('layouts.app')

@section('content')

<main>
        <h1>{{$idea->title}}</h1>
        <div class="idea-content">
            <span>Posted on {{ substr($idea->created_at, 0,10)}} by <a href="#">Author Name</a></span>
            <p>{{$idea->description}} </p>
            <div class="d-flex flex-wrap keywords">
                <a href="#" class="badge badge-secondary">{{$idea->keyword}}</a>
                <a href="#" class="badge badge-secondary">{{$idea->keyword}}</a>
                <a href="#" class="badge badge-secondary">{{$idea->keyword}}</a>
            </div>
        </div>
    </main>
    
@endsection