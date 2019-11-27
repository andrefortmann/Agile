
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
                        
                    
                   <?php // You can delete this!!
                    
                    /*$id = $displayidea->id;
                    // Create connection
                    $conn = new mysqli("localhost", "root", "", "ideabay");
                    $sql = "SELECT users.name,bids.price,bids.message from bids,ideas,users where bids.idea_id=ideas.id and bids.user_id=users.id and ideas.id=$id  and users.id=(SELECT users.id from bids WHERE idea_id=$id  LIMIT 1)";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["message"]."</td><td> ".$row["price"]."</td></tr>";
                    }
                    } else {
                                echo "<tr><td>There are currently no bids available.</td></tr>";
                        }*/
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
 @endforeach
