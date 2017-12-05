
@extends('front.master')

@section('title', 'Dịch vụ')

@section('container')
<!--service-->
<div class="container">
    <h2 class="box-heading text-uppercase text-center">DỊCH VỤ</h2>
    <div class="row">
        @foreach($service as $item)
        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft animated animated animated fade-service-left" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" >
            <div class="item-service">
                <div class="thumb">
                    <img src="../source/images/{{ $item->image }}" alt="Sự thật đằng sau những công nghệ triệt lông vĩnh viễn" class="img-responsive">
                </div>
                <div class="caption martop-25">
                    <div>
                        <span class="pull-left title text-brown product-title">{{ $item->title }}</span>
                        <span class="pull-right sr-price">$ {{ $item->price }}</span>
                    </div>
                    <br>
                    <p class="martop-25 sr-description">{{ $item->description }}</p>
                    <div class="text-uppercase pull-right btn-booknow">
                        <p class="book-now">
                            <a href="{{ route('service.detail',['id'=> $item->id]) }}">
                                <span class="top-left pull-left"></span>
                                    book now
                                <span class="top-right pull-right"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">{{ $service->links() }}</div>
</div>
<!--end service-->
@endsection