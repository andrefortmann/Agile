@extends('layouts.app')

@section('content')
<main>
    <h1>Create Idea</h1>
    <form class="form-create-idea" method="POST" action="">
        @csrf
        <div class="mb-3">
            <span>Enter Details</span>
        </div>
        <div class="form-label-group required">
            <input type="text" id="title" class="form-control" placeholder="Title" required>
            <label for="title">Title</label>
        </div>
        <div class="form-label-group required">
            <input type="text" id="abstract" class="form-control" placeholder="Abstract" required>
            <label for="abstract">Abstract</label>
        </div>
        <div class="form-label-group required">
            <textarea id="description" class="form-control" rows="5" placeholder="Description" required></textarea>
            <label for="description">Description</label>
        </div>
        <div class="form-label-group required">
            <input type="text" id="keywords" class="form-control" placeholder="Keywords" required>
            <label for="keywords">Keywords</label>
            <small id="keywordHelpBlock" class="form-text text-muted">
                Insert your keywords separated by commas.
            </small>
        </div>
        <button class="btn btn-dark" type="button">Cancel</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</main>
@endsection