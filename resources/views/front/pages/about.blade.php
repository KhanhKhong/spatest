@extends('front.master')

@section('title', 'Giới thiệu')

@section('container')
<!--about-->
<div class="container">
	<h2 class="box-heading text-uppercase text-center">GIỚI THIỆU</h2>
	<div class="row">
		<div class="col-sm-12"> 
			@if(!empty($about))
			{!! $about->description !!}
			@endif
		</div>
	</div>
</div>
<!--end about-->
@endsection