<?php

$keyword = $idea->keyword; 
$keywords_array = explode (",", $keyword);  

?>

@extends('layouts.app')

@section('content')

<main>
    <div class="idea-heading d-flex justify-content-between">
        <h1>{{$idea->title}}</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#placeBidModal">Place Bid</button>
    </div>
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

<div class="modal fade" id="placeBidModal" tabindex="-1" role="dialog" aria-labelledby="placeBidModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="placeBidModalLabel">How much is this idea worth to you?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{action('BidsController@store')}}">
            @csrf
                <div class="form-group">
                    <label for="money-amount" class="col-form-label" name="price">Amount</label>
                    <input type="number" class="form-control" id="money-amount" name="price">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Message</label>
                    <textarea class="form-control" id="message-text" name="message"></textarea>
                    <input type="hidden" name="ideaid" value="{{$idea->id}}">
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>
  
@endsection