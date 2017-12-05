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
                            <h2 class="animation animated-item-2">{{ $item->description }}</h2>
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
                    <a href="#">
                        <img class="media__image" src="../source/images/Picture1.png">
                    </a>
                    <div class="media__body">
                        <h2>BODY</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-sx-12">
                <div class="media">
                    <a href="#">
                        <img class="media__image" src="../source/images/Picture2.png">
                    </a>
                    <div class="media__body">
                        <h2>SKIN</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-sx-12">
                <div class="media">
                    <a href="#">
                        <img class="media__image" src="../source/images/Picture3.png">
                    </a>
                    <div class="media__body">
                        <h2>WELLNESS</h2>
                    </div>
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
                    <a id="tab-title" href="#vesinhtoanthan" data-toggle="tab">
                        <span class="top-left pull-left"></span>VỆ SINH TOÀN THÂN
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" href="#vesinhdavatoc" data-toggle="tab">
                        <span class="top-left pull-left"></span>VỆ SINH DA VÀ TÓC
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" href="#daugoi" data-toggle="tab">
                        <span class="top-left pull-left"></span>DẦU GỘI
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" href="#dauduongtoc" data-toggle="tab">
                        <span class="top-left pull-left"></span>DẦU DƯỠNG TÓC
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" href="#chamsocsuckhoe" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC SỨC KHOẺ
                    </a>
                </li>
                <li class="pull-right mb-product">
                    <a id="tab-title" href="#chamsocmoi" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC MÔI
                    </a>
                </li>
                <li class="active pull-right mb-product">
                    <a id="tab-title" href="#chamsocda" data-toggle="tab">
                        <span class="top-left pull-left"></span>CHĂM SÓC DA
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="tabs">
                <div class="tab-pane active" id="chamsocda">

                    <div class="woocat-resp-listing">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 first-product pull-left">
                                <div class="item-img">
                                    @if($proOne->price_sale > 0)
                                        <span class="onsale">Sale!</span>
                                    @endif
                                    <img width="600" height="600" class="size-full" src="../source/images/{{ $proOne->image }}" alt="">
                                </div>
                                <div class="item-content">  
                                    <h4><a href="#">{{ $proOne->title }}</a></h4>                                                                               
                                    <!-- rating  -->
                                    <div class="reviews-content">
                                        <div class="star">
                                            <span style="width:65px"></span>
                                        </div>
                                    </div>  
                                    <!-- end rating  -->
                                    <div class="item-price">
                                        <span>
                                            <span class="woocommerce-Price-amount amount">{{ $proOne->price }}
                                                &nbsp;
                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                            </span>                                   
                                        </span>
                                    </div>
                                    <!-- add to cart, wishlist, compare -->
                                </div>
                            </div>
                            <div class="resp-content-product clearfix col-md-8 col-sm-8 col-xs-12">
                                @foreach($products as $item)
                                <div class="item pull-left">
                                    <div class="item-wrap">
                                        <div class="item-detail">                                       
                                            <div class="item-img products-thumb">                                           
                                                <a href="#" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                <img width="300" height="300" src="../source/images/{{ $item->image }}" class="attachment-medium size-medium wp-post-image" alt="">                                        
                                            </div>                                      
                                            <div class="item-content">
                                                <h4><a href="#">{{ $item->title }}</a></h4>                                                                               
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
                <div class="tab-pane" id="chamsocmoi">...Content2...</div>
                <div class="tab-pane" id="chamsocsuckhoe">...Content3...</div>
                <div class="tab-pane" id="dauduongtoc">...Content4...</div>
                <div class="tab-pane" id="daugoi">...Content5...</div>
                <div class="tab-pane" id="vesinhdavatoc">...Content6...</div>
                <div class="tab-pane" id="vesinhtoanthan">...Content7...</div>
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
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="name" name="name" placeholder="YOUR NAME" type="text" required autofocus />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="email" name="email" placeholder="YOUR PHONE" type="email" required />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="name" name="name" placeholder="YOUR EMAIL" type="text" required autofocus />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                                    <input class="form-control form-width input-newslatter" id="email" name="email" placeholder="PREFFERED DATE AND TIME" type="email" required />
                                </div>
                            </div>
                            <textarea class="form-control form-width input-newslatter" id="message" name="message" placeholder="Write your comment here" rows="5"></textarea>
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
                    <h2><a href="#">{{ $item->title }}</a> </h2>
                    <p><span><i class="fa fa-calendar"></i>{{ $item->created_at }}</span></p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="text-center">
            <input type="button" class="btn btn-primary form-control text-center" value="Xem thêm tin tức và ưu đãi">
        </div>
    </div>
</div>
@endsection