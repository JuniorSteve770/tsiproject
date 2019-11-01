<section> 
      <style>
      /* Style the buttons */
      .card-horizontal {
          display: flex;
          flex: 1 1 auto;
      }
      #c2 {
        background:white;
        float: right
      }
      </style>


  <div class="accordion" id="accordionExample">
    <div class="card">
        <span class="card-header" id="headingOne">
          <h4 class="mb-0">
            Latest Article               
          </h4>
        </span>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            
              <div class="row  ">
                  <div class="col ">                      
                  <div class="jumbotron">
                      @foreach($last_articles as $article)
                          @if($article->image != '')
                          <img src="/{{$article->image}}" width="full" height="300px" class="card-img-top">
                          @else
                          <div class="jumbotron" style="background-color:transparent !important;"  alt="Card image cap">
                          <p class="text-justify">This post does not have a picture</p>
                          </div>
                          @endif
                          <br><br>
                        <h4 class="text-center"> <a href="detail?id={{$article->id}}">{{$article->title}}</a> </h4>
                        <br>
                        <p class="text-justify">{{ $article->content}}</p>
                        <p><i>Ajouter le {{ $article->created_at}}</i></p>
                        <p>this articles has been visited {{$article->visited}} times</p>
                      @endforeach
                  </div>
                  </div>
                  {{-- second column  starts here --}}
                  
                    <div class="col-sm-6 news-list-tabs">
                      <div class="card card-efc">
                          <ul class="nav nav-tabs nav-justified md-tabs " role="tab">
                              <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#latest-news" role="tab"><strong>Most popular Articles</strong> </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#most-popular" role="tab"><strong>Latest Articles</strong></a>
                              </li>
                          </ul>
                          <div class="card">
                          <div class="tab-content">
                              <div class="tab-pane active clearfix" id="latest-news" role="tabpanel">
                                    {{-- to be replpaced --}}
                                  @foreach($most_visited as $article)
                                          <div class="card">
                                              <div class="card-horizontal">
                                                  <div class="img-square-wrapper mt-2">                              
                                                      @if($article->image != '')
                                                      <img class="center-block image-center"  src="/{{$article->image}}" width="160px" height="140px"  alt="Card image cap">
                                                      @else
                                                      <div class="jumbotron" background-color:transparent !important;  alt="Card image cap">
                                                        <p class="text-justify">This post does not have a picture</p>
                                                      </div>
                                                      @endif
                                                  </div>
                                                  <div class="card-body">
                                                      <h5 class="card-title"><a href="detail?id={{$article['id']}}">{{$article['title']}}</a></h5>
                                                      <p class="card-text">{{str_limit($article->content, 80)}}..</p>                                       
                                                      <small class="text-muted"><i>Ajouter le {{ $article['created_at']}}</i></small>
                                                  </div>
                                              </div>               
                                          </div>
                                        @endforeach
                                                              
                                  <div id="c2" class="view-more-articles-link">
                                      <a href="articles">Plus d'articles &gt;&gt;</a>
                                  </div>
                              </div>
                                  <div class="tab-pane clearfix" id="most-popular" role="tabpanel">
                                  {{-- here is the contain to replace --}}     
                                                                      
                                        @foreach($lastes_articles as $article)
                                          <div class="card ">
                                              <div class="card-horizontal">
                                                  <div class="img-square-wrapper mt-2">                              
                                                      @if($article->image != '')
                                                      <img class="center-block image-center"  src="/{{$article->image}}" width="160px" height="140px" alt="Card image cap">
                                                      @else
                                                      <div class="jumbotron" alt="Card image cap">
                                                        <p class="text-justify">This post does not have a picture</p>
                                                      </div>
                                                      @endif
                                                  </div>
                                                  <div class="card-body">
                                                      <h5 class="card-title"><a href="detail?id={{$article->id}}">{{$article->title}}</a></h5>
                                                      <p class="card-text">{{str_limit($article->content, 80) }}..</p> 
                                                      
                                                      <small class="text-muted"><i>Ajouter la {{ $article->created_at}}</i></small>
                                                      <p>this articles has been visited {{$article->visited}} times</p>
                                                  </div>
                                              </div>               
                                          </div>
                                        @endforeach                                     
                                              
                                  <div id="c2" class="view-more-articles-link">
                                    <a href="articles">Plus d'articles &gt;&gt;</a>
                                  </div>
                                  </div>
                          </div></div>
                      </div>
                  
                                              
               {{-- the div bellow close the row    --}}
              </div>                   
           
        </div>         
    </div>
  </div>

</section>