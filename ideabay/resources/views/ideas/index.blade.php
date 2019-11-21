@extends('layouts.app')

@section('content')

    <main role="main" class="flex-shrink-0">
        <h1>Ideas</h1>
        <div class="card-columns list-ideas">

            @if(count($ideas) > 1)

            @foreach ($ideas as $idea)

            @include('partials.card')           
                
            @endforeach
        
            @else 
                <p>No ideas found</p>
            @endif


        </div>
    </main>
    
@endsection


