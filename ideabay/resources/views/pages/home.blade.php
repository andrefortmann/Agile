@extends('layouts.app')

@section('content')
<main role="main" class="flex-shrink-0">
    <h1>Ideas</h1>
    <div class="card-columns list-ideas">
        @include('partials.card')
        @include('partials.card')  
        @include('partials.card')
    </div>
</main>
@endsection