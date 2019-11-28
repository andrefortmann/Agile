
@foreach($ideas as $displayidea)
<div class="card">
    <div class="card-header" id="idea-{{$displayidea->id}}">

        <?php
        $keyword = $displayidea->keyword; 
        $keywords_array = explode (",", $keyword);  
        ?>
            <h5 class="card-title">{{$displayidea->title}}</h5>
            <div class="d-flex flex-wrap keywords">
                @foreach ($keywords_array as $keyword_array)
                    <a href="#" class="badge badge-secondary">{{$keyword_array}}</a>  
                @endforeach
            </div>
            <p class="card-text">{{$displayidea->description}}</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-{{$displayidea->id}}" aria-expanded="false" aria-controls="collapseOne">
                    Show Bids
                </button>
                {!!Form::open(['action' => ['IdeasController@destroy', $displayidea->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>

    </div>
    <div class="card-footer">
        <small class="text-muted">Posted on {{ substr($displayidea->created_at, 0,10)}}</small>
    </div>
    <div id="collapse-{{$displayidea->id}}" class="collapse" aria-labelledby="idea-{{$displayidea->id}}">
        <div class="card-body">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($displayidea->bids) > 0)                    
                        @foreach ($displayidea->bids as $bid)
                            @include('partials.bids_row')                  
                        @endforeach
                    @else
                        <tr><td>There are currently no bids available.</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
 @endforeach
