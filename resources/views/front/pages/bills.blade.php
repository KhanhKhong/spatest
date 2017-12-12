@extends('front.master')

@section('title', 'Đơn hàng')

@section('container')
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 category-hide">
			@include('front.layouts.nav')
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<div class="title-product3 block-title title1">
				<ul>
					<li><a href="{{ route('home') }}">Trang chủ</a></li>
					<li>Địa chỉ giao hàng của quý khách</li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 category-hide">
			<div class="cart2">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="box">
							@if ($errors->any())
							<ul>
								@foreach ($errors->all() as $error)
								<li style="color: red">{{ $error }}</li>
								@endforeach
							</ul>
							@endif
							<form action="{{ route('update.bills') }}" method="post" enctype="multipart/form-data">
								{{ csrf_field() }}
								<label>Họ và tên<sup class="required">*</sup></label>
								<br>
								<input type="text" class="input" name="name">
								<br>
								<label>Email<sup class="required">*</sup></label>
								<br>
								<input type="text" class="input" name="email">
								<br>
								<label>Địa chỉ<sup class="required">*</sup></label>
								<br>
								<input type="text" class="input" name="address">
								<br>
								<label>Số điện thoại<sup class="required">*</sup></label>
								<br>
								<input type="number" class="input" name="phone">
								<br>
								<label>Giới tính<sup class="required">*</sup></label>
								<br>
								<select class="form-control" name="gender">
									<option value="0">Nam</option>
									<option value="1">Nữ</option>
								</select>
								<br>
								<input type="submit" class="btn-contact" value="Đặt hàng">
							</form>
						</div>
						<a href="{{ URL::previous() }}" class="btn btn-cart3 float-left"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="title-product3 block-title" style="margin-bottom: 0;">
							<ul>
								<li>Thông tin đơn hàng</li>
							</ul>
						</div>
						<div style="border: 1px solid #ccc; border-top: none;">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Sản phẩm</th>
										<th>Số lượng</th>
										<th>Giá</th>
									</tr>
								</thead>
								<tbody>
									@foreach($carts as $item)
									<tr>
										<td>{{ $item->name }}</td>
										<td class="text-center">{{ $item->qty }}</td>
										<td>{{ $item->subtotal }}</td>
									</tr>
									@endforeach
								</tbody>
								<tr>
			                        <th >Tổng: {{ Cart::content()->count() }}</th>
			                        <th class="text-center">{{ Cart::count() }}</th>
			                        <th class="text-center">{{ Cart::subtotal()}}</th>
			                    </tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection