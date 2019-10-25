
  
  

<h2> Pined article</h2>
  <div class="row " style="background-color:lavender;">        
    @foreach($pined as $pin)
      <div class="col mx-2">
          @if($pin->image != '')
          <img src="/{{$pin->image}}" width="50px" height="50px">
          @else
          <p>Not found picture for this post</p>
          @endif
        <h4> <a href="detail?id={{$pin->id}}">{{$pin->title}}</a> </h4>
        <p>{{ $pin->content}}</p>
        <p><i>Ajouter le {{ $pin->created_at}}</i></p>
      </div>
    @endforeach        
  </div>
   
    
  