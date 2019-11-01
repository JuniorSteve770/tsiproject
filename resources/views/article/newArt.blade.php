<div>
    Liste des Aeticle
    @if($write || $is_admin)
        <a href="article/create"> Add articles</a>
    @endif
    <table class="sty" >
        <tr class="sty">
            <td class="sty">#</td>
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
                <a href="article/{{ $article->id }}" class="btn btn-default"> Detail</a>
                @if($write || $is_admin)
                <a href="article/{{ $article->id }}/edit" class="btn btn-default"> Edit</a>
                <form action="{{ route('article.destroy', $article)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="delete">
                    
                </form>
                @else
                @endif
                    
            </td>
        </tr>
                
        @endforeach;

    </table>
</div>