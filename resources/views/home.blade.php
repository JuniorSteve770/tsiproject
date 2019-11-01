@extends('layouts.app')
 
@section('content')
<style type="text/css">
    .sty {
        border: solid black 1px;
    }
</style>
<div class="container">
 
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Admin-Dashboard</h3> </div> <hr>

                
                <div class=" panel-body">
                   <h4><u> List of Users </u></h4> 
                    <div class="jumbotron">
                         
                            <ul>
                                @foreach($users as $user)
                                <li> {{ $user->name }} / {{ $user->email }}
                                @if($edit || $is_admin)
                                    <button onclick='onDelete("{{$user->id}}", "Admin")'>Delete</button> 
                                    <a href="edit?id={{$user->id}}" class="btn btn-default">Edit</a>
                                @else
                                <strong>Don't get privilege to do actions</strong>
                                @endif
                                </li>
                                @endforeach
                            </ul>
                    </div>
                    <br><br>
                    <div style="border-color: red solid  1px">
                        <h4><u> Create a cathegory</u></h4>
                        @if($write || $is_admin) 
                            <div class="jumbotron">
                                <form method="post">
                                    {{ csrf_field() }}
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" required>
                                    </div>
                                    <div>
                                        <label for="content">Content</label>
                                        <input type="text" name="content" required>
                                    </div>
                                    <input type="submit" name="" value="submit">

                                </form>
                            </div>
                        @else
                        <strong>Don't get privillege to add cathegorie</strong>
                        @endif
                        <h4><u> List of exiting cathegories</u></h4>
                        <div class="jumbotron">
                            <ul>
                                @foreach($cathegories as $cat)
                                <li> {{ $cat->title }}
                                    @if($edit || $is_admin)
                                    <button onclick='onDelete("{{$cat->id}}", "Cat")'>Delete</button>
                                    @else
                                    <strong>don't get privillege</strong>
                                    @endif

                                </li>
                                @endforeach
                            </ul>
                            
                        </div>
                        
                    </div>
                    <br><br>
                    
                        
                        <h4><u>Liste of existing Articles</u></h4>
                        @if($write || $is_admin)
                         <a href="article/create"> Add articles</a>
                        @endif
                        <div class="jumbotron " style="background-color:#343A40">
                        <table class="table table-dark">
                           
                            <tr class="sty">
                                <td class="sty">Nº</td>
                                <td class="sty">Title</td>
                                <td class="sty">Content</td>
                                <td class="sty">Action</td>
                            </tr> 
                            @foreach($articles as $key => $article)
                            <tr class="sty">
                                <td class="sty">{{ $key + 1}}</td>
                                <td class="sty">{{ $article->title }}</td>
                                <td class="sty">{{ $article->content }}</td>
                                <td class="sty">
                                    
                                    <a href="article/{{ $article->id }}" class="btn btn-outline-primary"> Detail</a>
                                    <br> <br>
                                    @if($write || $is_admin)
                                    <a href="article/{{ $article->id }}/edit" class="btn btn-outline-warning"> Edit</a>
                                    <form action="{{ route('article.destroy', $article)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                       <br>
                                        <input class="btn btn-outline-danger" type="submit" value="delete">
                                        
                                    </form>
                                    @else
                                    @endif
                                        
                                </td>
                            </tr>
                                 
                            @endforeach

                        </table>
                        </div>
                  
                    <hr>
                   
                         <h4><u> List of Newslleter subscribers</u></h4>
                            <div class="jumbotron">
                                @if(count($newsletters) != 0)
                                <ul>
                                    @foreach($newsletters as $new)
                                    
                                    <li>
                                        {{ $new->email }}
                                        @if($edit || $is_admin)
                                        <button onclick='onDelete("{{$new->id}}", "NewsLetter")'>Delete</button>
                                        @else
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>No record found in database</p> 
                                @endif
                            </div>

                         <h4><u> List of applicant</u></h4>
                                                  
                                <ul class="jumbotron">
                                    @foreach($applicants as $applicant)
                                    
                                    <li> 
                                        {{ $applicant->appelation }} {{ $applicant->lastname }}
                                        {{ $applicant->firstname }}
                                        @if($edit || $is_admin)
                                        <button onclick='onDelete("{{$applicant->id}}", "Applicant")'>Delete</button>
                                        @else
                                        @endif
                                        <a href="applicant?id={{ $applicant->id }}"> detail</a>
                                    </li>
                                    @endforeach
                                </ul>
                           
                    
                        @if($is_admin)
                        <h4><u> Global records on Articles</u></h4>
                             
                        
                        <ul class="jumbotron">
                            @foreach($records as $record)                            
                                <li> 
                                    @if($record->admin == 1)
                                        Adminstator
                                    @elseif($record->article == 1)
                                        Article
                                    @elseif($record->newsletter == 1)
                                        Newsletter
                                    @elseif($record->applicant == 1)
                                        Applicant
                                    @elseif($record->sensNews == 1)
                                        Send newsletter
                                    @elseif($record->cathegorie == 1)
                                        cathegorie
                                    @endif
                                    
                                    @if($record->actions == 'del')
                                        Deleted
                                    @elseif($record->actions == 'edit')
                                        Edited
                                    @elseif($record->actions == 'send')
                                        Send
                                    @else
                                    @endif
                                    at {{$record->created_at}}
                                    <button onclick="onDetail('{{$record->user_id}}')">View detail</button>
                                </li>
                            @endforeach
                       
                        </ul>
                         @endif
                            
                    </div>
                    <div id='uss'>
                        <div id='uss2'></div>
                    </div>
                </div>

            </div>
      
</div> 

<script type="text/javascript">
    $('#uss').hide();
    function onMasquer() 
    {
      $('#uss').hide();  
    }
    function onDetail(arg){
        $.ajax({
                type: 'get',
                url: 'getUser?id='+arg,
                timeout: 3000,
                dataType : 'json',
                success: function(data) {
                    console.log(data.user);
                    $('#uss').show();
                    $("#uss2").html("<h5>"+data.user.name+"</h5><p>"+data.user.email+"</p><button onclick='onMasquer()'>Hide</button>");
                    },
                error: function() {
                        alert('something wrong'); 

                  }    
                });
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
