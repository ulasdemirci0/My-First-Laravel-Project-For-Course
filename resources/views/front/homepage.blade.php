@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
    <div class="col-md-9">
    @include('front.widgets.articleWidget')
    </div>
    <!-- Pager-->

    @include('front.widgets.categoryWidget')

@endsection
