@extends('layouts.app')

@section('content')


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
/* text area content */
.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
     padding-left: 0.8rem;
     border-radius: 5px;
}

#c3{
  width: 100%;
  padding: 10px 10px;  
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  
}

#c4 {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
/* jumbotron */
 .jumbotron {
/* background: url('http://placekitten.com/800/500') no-repeat center center; */

width: 150%;

   margin-bottom:2px;
   font-size: 21px;
   font-weight: 200;
   /* line-height: 2.1428571435; */
   color: inherit;
   background-color:#E3F2FD;
    }


    </style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default">
                <div class="panel-heading"><h2 >  {{ $action }} your post articles here </h2></div>
                  
               <br><br>
                <div class="jumbotron">
                @if(!empty($article)) 
                    <form method="post"  action="{{ route('article.update', $article)}}"  enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                        <input  id="c3"  name="_method" value="PUT">
                    
                @else
                    <form method="post"  action="/article"  enctype="multipart/form-data">
                @endif
                        {{ csrf_field() }}
                        <div>
                            <label for="title"><h4>Title of your Article</h4> </label>
                            <input id="c3" type="text"placeholder="Write the Title here..." name="title" value="{{ !empty($article) ? $article->title : ''}}">
                        </div>
                        <br><br>
                            
                            <div class="form-group shadow-textarea">
                               <label for="exampleFormControlTextarea6"><h4>Article description and details</h4></label>
                               <textarea type="texte" name="content" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here...">@if(!empty($article))
                                  {{$article->content}}
                                @endif</textarea>
                           </div>
                                {{-- <textarea placeholder="Describe yourself here..." type="texte" name="content"  >
                                @if(!empty($article))
                                  {{$article->content}}
                                @endif
                            </textarea>  --}}
                        
                        <div><br>
                            <label for="cathegories"><h4>Cathegories</h4> </label>
                            <br>
                            <select name = "cathegorie[]" multiple required>
                                @foreach($cathergories as $cat) 
                                <option value="{{ $cat->id }}" 
                                    <?php 

                                            if(isset($catArc)) {
                                                foreach ($catArc as $cats) {
                                                    if($cats->title == $cat->title)
                                                    {
                                                        echo "selected";
                                                    }
                                                }
                                               
                                            }
                                    ?>
                                > {{ $cat->title }}</option>
                                @endforeach;
                            </select>
                        </div>
                    <br><br>
                        <div>
                            @if(!empty($article)) 
                                @if($article->image != '')
                                <img src="/{{$article->image}}" width="50px" height="50px">
                                @else
                                <p>Not found picture for this post</p>
                                @endif
                                <label for="image"><h4>Change image</h4> </label>
                            @else
                                <label for="image"><h4>Choose image</h4> </label>
                            @endif<form class="md-form">
                    {{-- here --}} 
                            <input type="file" name="image">
                        </div>
                        <div><br>
                            <label for="pined"><h4>Pined</h4> </label>
                             @if(!empty($article))
                                @if($article->pined == '1') 
                                <input type="checkbox" name="pined" checked>
                                @else
                                <input type="checkbox" name="pined">
                                @endif
                             @else
                             <input type="checkbox" name="pined">
                             @endif
                        </div>
                        <br>
                         <div>
                            <label for="tags"> <h4>Enter your Tags below here </h4></label>
                            <input  id="c3" type="text" class="input"  name="tags" data-role="tagsinput"  value="{{ !empty($tagsInString) ? $tagsInString : ''}}">
                        </div>
                        <br>
                        <div>
                            <input id="c4" type="submit" name="Submit">
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function onLog() {
console.log($(".input").tagsinput('items'));
}

    function onDelete(arg, attr) {

         $.ajax({
                    type: 'get',
                    url: 'delete'+attr+'?id='+arg,
                    timeout: 3000,
                    success: function(data) {
                         console.log(data);
                         window.location.reload();
                     },
                    error: function() {
                         alert('something wrong'); 

                  }    
                });   
    }


</script>
@endsection
