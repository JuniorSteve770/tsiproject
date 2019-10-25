@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Programs</h2></div>

                <div class="panel-body">
                   
                    
                    {{-- &nbsp; &nbsp; &nbsp; &nbsp;<a href="subscribe"> Subscribe</a>
                    <hr> --}}
                    <hr>

                    {{-- here start my contain --}}
                    <br>
                      @include('inc.buttons') 
                    <br><br><br><br>
                    
                @include('inc.newsletter')
                    
                        {{--Newsletter
                         <form method="POST">
                            {{ csrf_field()}}
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                            <input type="submit" value="Subscribe">
                        </form> --}}
                                       
                    <hr>
                    <div>
                        <h3>Here is listed all our categories of articles</h3>

                     
                            @foreach($cathegories as $cathegorie)
                            <input type="checkbox" onclick="onGetCategorie('{{ $cathegorie->id }}')"> {{ $cathegorie->title }}
                            @endforeach
                     
                    </div>
                    <hr>

                    <br>
                    @include('inc.rightab')

                    <hr>
                    @include('inc.pined')  
                    {{-- <div>
                       <h2> 5 last  articles</h2><br>

                     
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
                            
                     
                    </div> --}}
                    <br>
                    {{-- <div>
                        <h2>5 most visited</h2> <br>                     
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
                    </div> --}}
                    <br>

                    {{-- <div>
                       <h2> Pined article</h2> <br>

                     
                            @foreach($pined as $pin)
                                @if($pin->image != '')
                                <img src="/{{$pin->image}}" width="50px" height="50px">
                                @else
                                <p>Not found picture for this post</p>
                                @endif
                             <h4> <a href="detail?id={{$pin->id}}">{{$pin->title}}</a> </h4>
                             <p>{{ $pin->content}}</p>
                             <p><i>Ajouter le {{ $pin->created_at}}</i></p>
                            @endforeach
                            
                     
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection