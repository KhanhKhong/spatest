@extends('front.master')

@section('title', 'Sản phẩm')

@section('container')
<!--product-->
<div class="container">
    <h2 class="box-heading text-uppercase text-center">SẢN PHẨM</h2>
    <div class="row">
        @foreach($product as $item)
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="item product-marbottom50">
                <div class="item-wrap">
                    <div class="item-detail">                                       
                        <div class="item-img products-thumb">                                           
                            <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                            <img width="300" height="300" src="../source/images/{{ $item->image }}" class="attachment-medium size-medium wp-post-image" alt="">                                        
                        </div>                                      
                        <div class="item-content">
                            <h4><a href="{{ route('product.detail',['id' => $item->id]) }}">{{ $item->title }}</a></h4>                                                                               
                            <!-- rating  -->
                            <div class="reviews-content">
                                <div class="star"></div>
                            </div>  
                            <!-- end rating  -->
                            <div class="item-price">
                                <span>
                                    <span class="woocommerce-Price-amount amount">{{ $item->price }}
                                        &nbsp;
                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                    </span>                                               
                                </span>
                            </div>
                            <div class="add-info">
                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8361">
                                    <div class="yith-wcwl-add-button show" style="display:block">
                                        <a href="#" rel="nofollow" data-product-id="8361" data-product-type="simple" class="add_to_wishlist">
                                        Add to Wishlist</a>
                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="#" rel="nofollow">
                                            Browse Wishlist         
                                        </a>
                                    </div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#" rel="nofollow">
                                            Browse Wishlist         
                                        </a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                <div class="woocommerce product compare-button">
                                    <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                </div>                                           
                            </div>
                        </div>                                          
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="text-center">{{ $product->links() }}</div>
</div>
<!--end product-->
@endsection