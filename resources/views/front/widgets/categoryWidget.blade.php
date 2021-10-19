@isset($categories)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Kategoriler</div>
            <div class="list-group">
                @foreach($categories as $category)
                    <a class="list-group-item @if($category->slug ===  Request::segment(2)) active  @endif" href="{{route('category',$category->slug)}}">{{$category->name}}<span
                            class="badge rounded-pill bg-black float-end"
                            style="font-size: 12px;">{{$category->getArticleCount()}}</span></a>
                @endforeach
            </div>
        </div>
    </div>
@endif
