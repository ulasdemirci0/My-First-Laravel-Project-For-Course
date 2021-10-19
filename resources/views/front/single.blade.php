@extends('front.layouts.master')
@section('title',$article->title)
@section('post-image',$article->image)
@section('content')
    <div class="col-md-10 col-lg-8 col-xl-7">
        {!! $article->content !!}

        <p class="text-muted">{{$article->hit}} kez okundu.</p>

    </div>
    @include('front.widgets.categoryWidget')
@endsection
