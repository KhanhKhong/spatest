@extends('front.master')

@section('title', 'Tin tức')

@section('container')
<!--news detail-->
<div class="container">
    <h2 class="box-heading text-uppercase text-center">TIN TỨC & KHUYẾN MÃI</h2>
    <div class="box-content">
        <h3>{{ $news->title }}</h3>
        <p>

            {!! $news->description !!}
            
        </p>
    </div>
</div>
<!--end news detail-->
@endsection