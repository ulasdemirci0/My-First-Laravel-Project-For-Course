@extends('front.layouts.master')
@section('title','İletişim')
@section('post-image',asset('front/assets/img/')."/contact-bg.jpg")
@section('content')
    <div class="my-5">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @elseif($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
        <form id="contactForm" method="post" action="{{route('contact')}}">
            @csrf
            <div class="form-floating">
                <input class="form-control" id="name" name="name" value="{{old('name')}}" type="text"
                       placeholder="Ad ve Soyad"
                       data-sb-validations="required"/>
                <label for="name">Ad Soyad</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">İsim giriniz.</div>
            </div>
            <div class="form-floating">
                <input class="form-control" id="email" name="email" value="{{old('email')}}" type="email"
                       placeholder="john.doe@mail.com"/>
                <label for="email">Mail Adresi</label></div>
            <div class="form-floating">
                <input class="form-control" id="topic" name="topic" value="{{old('topic')}}" type="text"
                       placeholder="Konu giriniz."/>
                <label for="topic">Konu</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="message" name="message" placeholder="Mesajınız..."
                          style="height: 12rem">{{old('message')}}</textarea>
                <label for="message">Mesaj</label>
            </div>
            <br>
            <button class="btn btn-outline-success text-uppercase" id="submitButton" type="submit">Gönder
            </button>
        </form>
    </div>
@endsection
