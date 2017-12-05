@extends('front.master')

@section('title', 'Tin tức')

@section('container')
<!--news-->
<div class="container">
    <h2 class="box-heading text-uppercase text-center">TIN TỨC & KHUYẾN MÃI</h2>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 tab-col-3">
            @include('front.layouts.nav')
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 tab-col-9 description">
            <div class="woocommerce-tabs wc-tabs-wrapper">
                @foreach($news as $item)
                <div class="main-news">
                    <div class="news-left2">
                        <a href="#"><img src="../../source/images/{{ $item->image }}"></a> 
                    </div>
                    <div class="news-right2">
                        <h2><a href="#">{{ $item->title }}</a> </h2>
                        <p><span><i class="fa fa-calendar"></i>{{ $item->created_at }}.</span></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">{{ $news->links() }}</div>
        </div>
    </div>
</div>
<!--end news-->
@endsection