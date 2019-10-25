<section> 
   
  <div class="row mx-2 ">
    
    <div class="col x-4">
      <h4>Latest Article</h4> 
      
      {{-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:80%" alt="Image"> --}}
      <div class = "mx-4"> 
          @foreach($last_articles as $article)
              @if($article->image != '')
              <img src="/{{$article->image}}" width="50px" height="50px">
              @else
              <p>Not found picture for this post</p>
              @endif
            <h4> <a href="detail?id={{$article->id}}">{{$article->title}}</a> </h4>
            <p>{{ $article->content}}</p>
            <p><i>Ajouter le {{ $article->created_at}}</i></p>
          @endforeach
      </div>
    </div>
      
    <div class="col m-4">
      <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
            aria-selected="true"><h4>Most popular Articles</h4></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
            aria-selected="false"><h4>The Latest Articles</h4></a>
        </li>
      </ul>
    <div class="tab-content card pt-5" id="myTabContentJust">
        <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
      <p>
          @foreach($most_visited as $article)
              @if($article['image'] != '')
              <img src="/{{$article['image']}}" width="50px" height="50px">
              @else
              <p>Not found picture for this post</p>
              @endif
            <h4><a href="detail?id={{$article['id']}}">{{$article['title']}}</a> </h4>
            <p>Ajouter le {{ $article['content']}}</p>
            <p><i>Ajouter le {{ $article['created_at']}}</i></p><br>
          @endforeach
      </p>
        </div>
      
        <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
          <p> 
            @foreach($last_articles as $article)
                @if($article->image != '')
                <img src="/{{$article->image}}" width="50px" height="50px">
                @else
                <p>Not found picture for this post</p>
                @endif
              <h4> <a href="detail?id={{$article->id}}">{{$article->title}}</a> </h4>
              <p>{{ $article->content}}</p>
              <p><i>Ajouter le {{ $article->created_at}}</i></p>
            @endforeach
          </p>
        </div> 
    </div>
    </div>   
  </div>  


</section>