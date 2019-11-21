@extends('layouts.app')

@section('content')
<main>
<h1>Profile</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                <br><br>
                    <a href="/create-idea" class="btn btn-primary">Create Post</a>
                    <br><br><br>
                    <h3>Your Blog Posts</h3>
                   
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Abstract</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($ideas as $displayidea)
                                <tr>
                                    <td>{{$displayidea->title}}</td>
                                    <td>{{$displayidea->abstract}}</td>
                                    <td>{{$displayidea->description}}</td>
                                    <td><a href="/create-idea" class="btn btn-primary">Edit Post</a></td>
                                    <td><a href="/create-idea" class="btn btn-primary">Delete Post</a></td>
                                </tr>
                            @endforeach
                        </table>
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection