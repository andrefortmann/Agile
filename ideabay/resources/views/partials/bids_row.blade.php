@foreach($users as $bidder)
    @if($bidder->id == $bid->user_id)
     <tr><td> {{$bidder->name}}</td><td>{{$bid->message}}</td><td> {{$bid->price}}</td></tr>
    @endif
@endforeach