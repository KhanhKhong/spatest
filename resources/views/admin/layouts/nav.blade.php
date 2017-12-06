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
