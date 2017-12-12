@extends('front.master')

@section('title', 'Trang chủ')

@section('container')
<div class="container">
    <div class="content-slider">
        <div id="main-slider">
            <div class="carousel slide">
                <div class="carousel-inner">
                    <!--/.item-->
                    @foreach($banner as $key => $item)
                    <div class="item{{ $key == 0 ? ' active' : '' }}" style="background-image: url(../source/images/{{ $item->image }})">
                        <div class="carousel-content">
                            <h1 class="animation animated-item-1">{{ $item->title }}</h1>
                            <h2 class="animation animated-item-2">{{ $item->sub_title }}</h2>
                            <p><a class="btn-slide animation animated-item-3" href="#">PURCHASE NOW</a></p>
                        </div>
                    </div>
                    @endforeach
                    <!--/.item-->
                </div>
                <!--/.carousel-inner-->
            </div>
            <!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <h1 class="service-title">Experience The Spa!</h1>
        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perferendis earum, saepe blanditiis voluptatibus excepturi possimus, nulla ut necessitatibus vel iusto a reiciendis sint distinctio fuga, sit deleniti illo est?</p>
        <div class="row-custom">
            <div class="col-md-4 col-sm-4 col-sx-12">
                <div class="media">
                    <a href="/service/1">
                        <img class="media__image" src="../source/images/Picture1.png">
                        <div class="media__body">
                            <h2>BODY</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-sx-12">
                <div class="media">
                    <a href="/service/2">
                        <img class="media__image" src="../source/images/Picture2.png">
                        <div class="media__body">
                            <h2>SKIN</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-sx-12">
                <div class="media">
                    <a href="/service/3">
                        <img class="media__image" src="../source/images/Picture3.png">
                        <div class="media__body">
                            <h2>WELLNESS</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="container">
    <div class="row-custom">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li><span class="product-title">CHĂM SÓC DA.......</span></li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#vesinhtoanthan" data-toggle="tab">
                        <span class="top-left pull-left"></span>VỆ SINH TOÀN THÂN
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#vesinhdavatoc" data-toggle="tab">
                        <span class="top-left pull-left"></span>VỆ SINH DA VÀ TÓC
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#daugoi" data-toggle="tab">
                        <span class="top-left pull-left"></span>DẦU GỘI
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#dauduongtoc" data-toggle="tab">
                        <span class="top-left pull-left"></span>DẦU DƯỠNG TÓC
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#chamsocsuckhoe" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC SỨC KHOẺ
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#chamsocmoi" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC MÔI
                    </a>
                </li>
                <li class="active pull-right mb-product">
                    <a id="tab-title" class="text-uppercase" href="#chamsocda" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC DA
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="tabs">
                <div class="tab-pane active" id="chamsocda">

                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_1))
                                <div class="item-img">
                                    @if($proOne_1->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_1->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_1->id]) }}">{{ $proOne_1->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_1->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_1 as $item)
                                <div class="item pull-left">
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
                                                    <a rel="nofollow" href="{{ route('cart.create',['productId' => $item->id]) }}" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                                                    <div class="woocommerce product compare-button">
                                                        <a href="#" class="compare button" rel="nofollow">Đặt hàng</a>
                                                    </div>                                           
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="chamsocmoi">

                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_2))
                                <div class="item-img">
                                    @if($proOne_2->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_2->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_2->id]) }}">{{ $proOne_2->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_2->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_2 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="chamsocsuckhoe">
                    
                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_3))    
                                <div class="item-img">
                                    @if($proOne_3->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_3->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_3->id]) }}">{{ $proOne_3->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_3->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_3 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="dauduongtoc">

                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_4))    
                                <div class="item-img">
                                    @if($proOne_4->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_4->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_4->id]) }}">{{ $proOne_4->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_4->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_4 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="daugoi">
                    
                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_5))    
                                <div class="item-img">
                                    @if( $proOne_5->price_sale > 0 )
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_5->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_5->id]) }}">{{ $proOne_5->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_5->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_5 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="vesinhdavatoc">
                    
                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_6))                     
                                <div class="item-img">
                                    @if($proOne_6->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_6->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_6->id]) }}">{{ $proOne_6->title }}</a></h4>
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_6->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_6 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="vesinhtoanthan">
                    
                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                @if(!empty($proOne_7))
                                <div class="item-img">
                                    @if($proOne_7->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne_7->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="{{ route('product.detail',['id' => $proOne_7->id]) }}">{{ $proOne_7->title }}</a></h4>
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne_7->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                                @endif              
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products_7 as $item)
                                <div class="item pull-left">
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
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container">
    <div class="main-box-contact">
        <div class="row-custom">
            <div class="my-container marleft-10 marright-10">
                <h1 class="service-title text-center schedule-text">Đặt lịch hẹn</h1>
                <div class="row-custom">
                    <div class="col-sm-8 col-md-8 contact-form">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: red">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('email.create') }}" id="contact" method="get" class="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="name" name="name" placeholder="YOUR NAME" type="text" required autofocus />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="phone" name="phone" placeholder="YOUR PHONE" type="number" required />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="email" name="email" placeholder="YOUR EMAIL" type="text" required autofocus />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="time" name="time" placeholder="PREFERRED DATE AND TIME" type="text" required />
                                </div>
                            </div>
                            <textarea class="form-control form-width input-newslatter" id="description" name="description" placeholder="Write your comment here" rows="5"></textarea>
                            <button type="submit" class="btn-contact">Gửi</button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-4">
                        <div class="schedule-text">
                            <h3>Thời gian làm việc</h3>
                            <div class="schedule-box padbottom-10">
                                <p class="marbottom-0"><i class="fa fa-clock-o marright-10" aria-hidden="true"></i>Monday-Friday</p>
                                <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                            </div>
                            <div class="schedule-box padbottom-10">
                                <p class="marbottom-0"><i class="fa fa-map-marker marright-10" aria-hidden="true"></i></i>Monday-Friday</p>
                                <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                            </div>
                            <div class="padbottom-10">
                                <p class="marbottom-0"><i class="fa fa-phone marright-10" aria-hidden="true"></i>Monday-Friday</p>
                                <span class="marleft-20">9:00 sáng - 6:00 tối</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<br>

<div class="container">
    <h2 class="text-center">Tin tức và ưu đãi mới nhất</h2>
    <div class="row-custom">
        @foreach($news as $item)
        <div class="col-sm-6">
            <div class="main-news">
                <div class="news-left2">
                    <a href="#"><img src="../source/images/{{ $item->image }}"></a> 
                </div>
                <div class="news-right2">
                    <h2><a href="{{ route('news.detail',['id' => $item->id]) }}">{{ $item->title }}</a> </h2>
                    <p><span><i class="fa fa-calendar"></i>{{ $item->created_at }}</span></p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="text-center">
            <a href="{{ route('news.main') }}">
                <input type="button" class="btn btn-primary form-control text-center" value="Xem thêm tin tức và ưu đãi">
            </a>
        </div>
    </div>
</div>
@endsection