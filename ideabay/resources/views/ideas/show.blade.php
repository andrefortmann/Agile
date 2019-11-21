<?php

$keyword = $idea->keyword; 
$keywords_array = explode (",", $keyword);  

?>

@extends('layouts.app')

@section('content')

<main>
        <h1>{{$idea->title}}</h1>
        <div class="idea-content">
        <span>Posted on {{ substr($idea->created_at, 0,10)}} by <a href="#">{{$author->name}}</a></span>
            <p>{{$idea->description}} </p>
            <div class="d-flex flex-wrap keywords">
            @foreach ($keywords_array as $keyword_array)

            <a href="#" class="badge badge-secondary">{{$keyword_array}}</a>
                
             @endforeach
            </div>
        </div>
    </main>
    
@endsection