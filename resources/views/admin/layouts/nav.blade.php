<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<a class="navbar-brand" href="index.html">Admin</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Edit Header</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'slider' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('slider') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Slider</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'categories' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('categories') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Product Category</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'product_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('product_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Product</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'about.categories' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('about.categories') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">About Category</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'about_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('about_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">About</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'news.categories' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('news.categories') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">News Category</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'news_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('news_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">News</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'service.categories' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('service.categories') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Service Category</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'service_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('service_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Service</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'schedule_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('schedule_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Schedule</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'bills_admin' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('bills_admin') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Bills</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'footer' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('footer') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">footer</span>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav sidenav-toggler">
			<li class="nav-item">
				<a class="nav-link text-center" id="sidenavToggler">
					<i class="fa fa-fw fa-angle-left"></i>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<i class="fa fa-fw fa-sign-out"></i>Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	</div>
</nav>
