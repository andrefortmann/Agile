<?php
$keyword = $idea->keyword; 
$keywords_array = explode (",", $keyword);  
?>
<div class="card">
    <div class="card-body">
    <h5 class="card-title"> {{$idea->title}}</h5>
        <div class="d-flex flex-wrap keywords">
            @foreach ($keywords_array as $keyword_array)
                <a href="#" class="badge badge-secondary">{{$keyword_array}}</a>               
            @endforeach
        </div>
        <p class="card-text">{{$idea->abstract}}</p>
        <a href="/ideas/{{$idea->id}}" class="btn btn-primary">Read More</a>
    </div>
    <div class="card-footer">
        @foreach ($users as $user)
            @if($user->id == $idea->user_id) 
                <small class="text-muted">Posted on {{ substr($idea->created_at, 0,10)}} by {{$user->name}}</small>
            @endif
        @endforeach
    </div>
</div>   