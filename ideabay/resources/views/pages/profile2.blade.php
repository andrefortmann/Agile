@extends('layouts.app')

@section('content')

<main>
    <h1>Profile</h1>
    <div class="profile-list-ideas">
        @include('partials.card_bids')
        @include('partials.card_bids')
        @include('partials.card_bids')
    </div>
</main>
  
@endsection