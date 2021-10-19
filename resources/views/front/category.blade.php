@extends('front.layouts.master')
@section('title',$category->title)
@section('content')
    <div class="col-md-9">
    @if(count($articles) > 0)
            @include('front.widgets.articleWidget')
        @else
            <div class="alert alert-danger"><h6>Bu kategoride henüz bir yazı bulunmuyor...</h6></div>
    @endif
    <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                →</a></div>
    </div>

    @include('front.widgets.categoryWidget')

@endsection
