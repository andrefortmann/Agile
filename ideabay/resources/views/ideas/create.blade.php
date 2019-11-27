@extends('layouts.app')

@section('content')
<main>
    <h1>Create Idea</h1>
    <form class="form-create-idea" method="POST" action="{{action('IdeasController@store')}}">
        @csrf
        <div class="mb-3">
            <span>Enter Details</span>
        </div>
        <div class="form-label-group required">
            <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
            <label for="title" name="title">Title</label>
        </div>
        <div class="form-label-group required">
            <input type="text" id="abstract" name="abstract" class="form-control" placeholder="Abstract" required>
            <label for="abstract" name="abstract">Abstract</label>
            <small id="keywordHelpBlock" class="form-text text-muted">
                A short summary of your idea.
            </small>
        </div>
        <div class="form-label-group required">
            <textarea id="description" name="description" class="form-control" rows="5" placeholder="Description" required></textarea>
            <label for="description" name="description">Description</label>
            <small id="keywordHelpBlock" class="form-text text-muted">
                Describe it as good as you can, all the details matter.
            </small>
        </div>
        <div class="form-label-group required">
            <input type="text" id="keywords" name="keyword" class="form-control" placeholder="Keywords" required>
            <label for="keywords" name="keyword">Keywords</label>
            <small id="keywordHelpBlock" class="form-text text-muted">
                Insert your keywords separated by commas.
            </small>
        </div>
        <button class="btn btn-dark" type="button">Cancel</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</main>
@endsection