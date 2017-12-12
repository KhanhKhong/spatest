<div class="sw-related-product">
    <div class="block-title title1">
        <h2>
            <span>Sản phẩm mới</span>
        </h2>
    </div>
    <div class="carousel-inner">
        <div class="active">
            @foreach($relatePro as $item)
            <div class="bs-item cf">
                <div class="bs-item-inner">
                    <div class="item-img">
                        <a href="#">
                            <img src="../../source/images/{{ $item->image }}" alt="">
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="star"></div>
                        <h4><a href="#" title="Nước hoa Chanel">{{ $item->title }}</a></h4>
                        <p>
                            <span class="woocommerce-Price-amount amount">{{ $item->price }}&nbsp;
                                <span class="woocommerce-Price-currencySymbol">₫</span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>