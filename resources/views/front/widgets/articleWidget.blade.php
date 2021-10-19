<!-- Post preview-->
@foreach($articles as $article)
    <div class="post-preview">
        <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
            <h2 class="post-title">{{$article->title}}</h2>
            <img class="mx-auto rounded img-thumbnail d-flex" height="400" src="{{$article->image}}"
                 alt="{{$article->slug}}">
            <h3 class="post-subtitle">{!! Str::limit(strip_tags($article->content),90) !!}</h3>
        </a>
        <p class="post-meta">{{$article->getCategory->name}} <span
                class="float-end">{{$article->created_at->diffForHumans()}}</span></p>
    </div>
    <!-- Divider-->
    @if(!$loop->last)
        <hr class="my-4"/>
    @endif

@endforeach
{{ $articles->links() }}
