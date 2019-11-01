@extends('../layouts.app')
<style>
   .top-left { 
			top: 0%; 
			left:25%; 
		} 
		
    .top-right { 
        top: 0%; 
        right: 25%; 	
    }
</style>

@section('content')
    
    <div class="container">
    <h4>{{ $article->title}}  Details</h4> <hr>
    
        <div class=" jumbotron">
            
                @if($article->image != '')
                <img src="/{{$article->image}}"  width="full" height="full" class="card-img-top">
                @else
                    <div class="jumbotron">
                    <p class="text-justify">No picture found for this post</p>
                    </div>
                @endif
                <hr>
                <div class="row">
                <h3><u>Title:</u> </h3>&nbsp;&nbsp;
                <p class="text-justify"> <h3>{{ $article->title}}</h3> </p>
                </div><br>
                <div class="row">
                <h3><u>Contain:</u> </h3>&nbsp;
                <p class="text-justify"><h5>{{ $article->content}}</h5></p>
                </div><br>

                <h4> <h4>Tags of {{ $article->title}}  Article</h4> <hr>
                <ul>
                    @foreach($tags as $tag)
                    <li> {{ $tag->tag }}</li>
                    @endforeach
                </ul>
                <br><br>
                <h4> <h4> Cathegory of {{ $article->title}}  Article</h4> <hr>
                <ul>
                    @foreach($cathegories as $cathegorie)
                    <li> {{ $cathegorie->title }}
                        <p>{{ $cathegorie->description }}</p>
                    </li>
                    
                    @endforeach
                </ul>
                <hr>
                {{-- here --}}
                <div class="position-relative "> 
                        <div class="position-absolute top-left">
                            <a id="but"  href="{{ $article->id }}/edit" class="btn btn-primary" 
                            role="button" aria-pressed="true"> Edit Article</a>                           
                        </div> 

                        <form action="{{ route('article.destroy', $article)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="position-absolute top-right">	
                            <input class="btn btn-danger" id="c4right"  type="submit" value="Delete Article"> 
                            </div>                                
                        </form>                  
                </div> 
                {{-- end --}}
            </div>
    </div>

@endsection
