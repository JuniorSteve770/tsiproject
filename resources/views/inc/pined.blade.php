<div class="jumbotron">

<h2> Pined article</h2>  
  <div class="row">
    
      @foreach($pined as $pin)
      <div class="card text-center col-2 " style="width: 1rem;">        
            @if($pin->image != '')
            {{-- <img src="/{{$pin->image}}" width="full" height="140px" class="card-img-top"> --}}
            <img class="card-img-top" 
                src="/{{$pin->image}}" 
                data-holder-rendered="true" 
                style="height: 150px; width: full; display: block;">
            @else
              <div class="jumbotron">
                <p class="text-justify" style="height: 10px; width: full; display: block;">This post does not have a picture</p>
              </div>
            @endif 
            <br>
          <h4 class="card-title"> <a href="detail?id={{$pin->id}}">{{$pin->title}}</a> </h4>
          <br>
          <p class="text-justify">{{ str_limit($pin->content, 200) }}</p>
          <p><i>Ajouter le {{ $pin->created_at}}</i></p><br>
        </div>
      @endforeach
      
  </div>  
            
{{-- 
this is another way of alignung elements
  <div class="d-inline p-2 bg-primary text-white">d-ffff</div>
<div class="d-inline p-2 bg-dark text-white">d-inline</div> --}}
   
 </div>   
