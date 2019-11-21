<div class="card">
    <div class="card-body">
    <h5 class="card-title"> {{$idea->title}}</h5>
        <div class="d-flex flex-wrap keywords">
            <a href="#" class="badge badge-secondary">Keyword</a>
            <a href="#" class="badge badge-secondary">Keyword</a>
            <a href="#" class="badge badge-secondary">keyword</a>
        </div>
        <p class="card-text">{{$idea->abstract}}</p>
        <a href="/ideas/{{$idea->id}}" class="btn btn-primary">Read More</a>
    </div>
    <div class="card-footer">
        <small class="text-muted">Posted on {{ substr($idea->created_at, 0,10)}} by <a href="#">Author Name</a></small>
    </div>
</div>   