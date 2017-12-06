<div class="btt">
    <div class="bttop" style="display: block;"></div>
</div>
<!-- header top -->
<header class="masthead header-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="logo">
                    <a href="{{ route('home') }}"><img height="200" src="../../source/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="pull-left  hidden-xs">
                    <h3 class="slogan-text padtop-10">Đánh thức vẻ đẹp Làn da</h3>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="pull-right martop-25 line3">
                    <span class="padright-10 text-gray contact-us">Call us: +15557200314</span>
                    <div class="icon-circle pull-right">
                        <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="icon-circle pull-right">
                        <a href="#" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="icon-circle pull-right">
                        <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="icon-circle pull-right">
                        <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>
<div class="clearfix"></div>
<!-- end header top -->
<div class="container">
    <nav id="navbar-main" class="bg-header navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle nav-custom collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand menu-title" href="{{ route('home') }}">TRANG CHỦ</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse nav-custom">
                <ul class="nav navbar-nav navbar-right margin-0 marright-10 mb-0">
                    <li class="dropdown">
                        <a class="menu-title" href="{{ route('about') }}">GIỚI THIỆU</a>
                        <ul class="dropdown-menu" style="display: none;">
                            @foreach($cate_about as $item)
                                @if($item->children->count() > 0)
                                <li><a href="{{ route('about.detail',['id' => $item->id]) }}">{{$item->title}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $submenu)
                                            <li><a href="{{ route('about.detail',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                    <li><a href="{{ route('about.detail',['id' => $item->id]) }}">{{$item->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="menu-title" href="#">DỊCH VỤ</a>
                        <ul class="dropdown-menu" style="display: none;">
                            @foreach($cate_service as $item)
                                @if($item->children->count() > 0)
                                <li><a href="{{ route('service',['id' => $item->id]) }}">{{$item->title}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $submenu)
                                            <li><a href="{{ route('service',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                    <li><a href="{{ route('service',['id' => $item->id]) }}">{{$item->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a class="menu-title" href="#">SẢN PHẨM</a>
                        <ul class="dropdown-menu" style="display: none;">
                            @foreach($cate_product as $item)
                                @if($item->children->count() > 0)
                                <li><a href="{{ route('product',['id' => $item->id]) }}">{{$item->title}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $submenu)
                                            <li><a href="{{ route('product',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                    <li><a href="{{ route('product',['id' => $item->id]) }}">{{$item->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a class="menu-title" href="{{route('news.main')}}">TIN TỨC VÀ KHUYẾN MÃI</a>
                        <ul class="dropdown-menu" style="display: none;">
                            @foreach($cate_news as $item)
                                @if($item->children->count() > 0)
                                <li><a href="{{ route('news',['id' => $item->id]) }}">{{$item->title}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $submenu)
                                            <li><a href="{{ route('news',['id' => $submenu->id]) }}">{{$submenu->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                    <li><a href="{{ route('news',['id' => $item->id]) }}">{{$item->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</div>