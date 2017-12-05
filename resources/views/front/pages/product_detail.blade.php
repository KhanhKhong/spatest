@extends('front.master')

@section('title', 'Sản phẩm')

@section('container')
<!--product-->
<div class="container">
    <div class="title-product3">
        <ul>
            <li><a href="index.html">Trang chủ</a></a></li>
            <li><a href="product.html">Sản phẩm</a></li>
            <li><a href="product.html">body</a></li>
            <li>Gucci</li>
        </ul>
        <div class="clearfix"></div>
        <div class="single-product-top row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="product-images">
                    <div class="product-images-container thumbnail-left">
                        <div id="slider" class="product-responsive-thumbnail">
                            <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                    <img src="../../source/images/{{ $product->image }}" alt="description" class="thumbs-img" />
                                </div>
                            </div>
                            @foreach( $thumbnail as $item)
                            <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                    <img src="../../source/images/{{ $item->thumbnail }}" alt="description" class="thumbs-img" />
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Image Slider -->
                        <div class="product-responsive slick-slider">
                            <div class="item-img-slider">
                                <div class="images">
                                    @if($product->price_sale > 0 )
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <a href="#" class="zoom">
                                        <img id="largeImage" src="../../source/images/{{ $product->image }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-summary col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 itemprop="name" class="product_title">{{ $product->title }}</h1>
                <div class="product-stock in-stock">
                    Tình trạng: 
                    @if($product->status != 0)
                        <span>Còn hàng</span>
                    @else
                        <span>Hết hàng</span>
                    @endif
                </div>
                <div itemprop="description" class="product-description">
                    <h2 class="quick-overview">Mô tả nhanh</h2>
                    <p>
                        {!! $product->short_description !!}
                    </p>
                </div>
                <div>
                    <p class="price">
                        @if($product->price_sale > 0)
                        <del>
                            <span class="woocommerce-Price-amount amount">{{ $product->price_sale }}&nbsp;
                                <span class="woocommerce-Price-currencySymbol">₫</span>
                            </span>
                        </del> 
                        @endif
                        <ins>
                            <span class="woocommerce-Price-amount amount">{{ $product->price }}&nbsp;
                                <span class="woocommerce-Price-currencySymbol">₫</span>
                            </span>
                        </ins>
                    </p>
                </div>
                <div class="product-summary-bottom clearfix">
                    <form action="" enctype="multipart/form-data" class="cart">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus">
                            <input type="number" id="qty" step="1" min="1" max="" name="quantity" value="1" title="SL" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                            <input type="button" value="+" class="plus">
                        </div>
                        <button type="submit" class="single_add_to_cart_button button alt marright-10">Thêm vào giỏ</button>
                        <div class="woocommerce product compare-button marright-10">
                            <a href="javascript:void(0)" class="compare button" data-product_id="7383" rel="nofollow">Đặt hàng</a>
                        </div>
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361 marright-10">
                            <div class="yith-wcwl-add-button show" style="display:block">
                                <a href="#" class="add_to_wishlist">
                                Add to Wishlist</a>
                                <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="martop-25"></div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 tab-col-3">
                @include('front.layouts.nav')
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 tab-col-9 description">
                <div class="sw-related-product">
                    <div class="block-title title1">
                        <h2>
                            <span>Mô tả</span>
                        </h2>
                    </div>
                    <div class="bs-item cf">
                        <div class="bs-item-inner">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end product-->
@endsection