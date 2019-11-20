@extends('layouts.app')

@section('content')
<main>
    <h1>Idea Title</h1>
    <div class="card-columns list-ideas">
        @include('partials.card')
        @include('partials.card')  
        @include('partials.card')
        @include('partials.card')
        @include('partials.card')
    </div>
</main>
@endsection