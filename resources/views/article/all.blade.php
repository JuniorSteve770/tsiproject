@extends('../layouts.app')

<style>
#c3{
  width: 100%;
  padding: 10px 10px;  
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  
}
#c4 {
   position:relative;
left:35%;
right:65%;
/* bottom:5%;
top:60%; */

  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>

@section('content')   

    <div class="container panel panel-default">
        <div class="panel-heading"><h3>All Post</h3></div>

            <div class="container jumbotron">
                <h4>Liste cathegories</h4>
                <br>                           
                    <form id="myForm" method="post">
                        {{ csrf_field() }}
                        @foreach($cathegories as $cat)
                            <input  type="radio" name="cat"  value="{{$cat->id}}" onclick="onSearch('{{$cat->id}}')">&nbsp;{{$cat->title}} <br><br>
                        @endforeach
                    </form>                       
                                          
                <hr>
                <form method="post">
                    {{ csrf_field() }}
                    <input type="search" id="c3" name="q" placeholder="enter tag of articles to search">
                    <input type="submit" id="c4" value="search"  name="two">
                </form>
                <br><br>

           
                            
                    <h3>Liste des Article</h3>
                <div class="row">
                    @foreach($articles as $article)
                        <div class="card text-center col-4  " style="width: 1rem;">   
                                @if($article->image != '')
                                <img src="/{{$article->image}}" width="full"; height="250px">
                                @else
                                <div class="jumbotron">
                                <p class="text-justify">Not found picture for this post</p>
                                </div>
                                @endif
                            <br> <hr>
                            <h4 class="text-center">{{$article->title}}</h4>
                            <br>
                            <p class="text-justify"><b>{{$article->content}}</b></p>  
                                </p>
                            
                                <p><i> Ajouter le  {{$article->created_at}}</i></p>                            
                            
                                {{-- <h4 class="text-left">Categorie of this articles</h4> --}}
                            @foreach($cathegories as $cathegorie)
                            {{-- <p class="text-center">{{ $cathegorie->title }}</p> --}}
                            {{-- <p class="text-justify">{{ $cathegorie->description }}</p> --}}
                            @endforeach                            
                        </div >  
                        
                    @endforeach 
                </div>                       
            </div>
    
        </div>
        </div>
    </div>
    
        <script type="text/javascript">
            function onSearch(arg){
                $('form#myForm').submit();
            }
        </script>

@endsection