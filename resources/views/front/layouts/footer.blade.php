<footer id="footer" class="footer">
	<div class="footer-background">
		<div class="container">
			<div class="row">    
				<div class="col-xs-12 col-sm-4 col-md-4 column logo-fnone">          
					<h2 class="footer-title">liên Hệ</h2>
					@if(!empty($footer))
						{!! $footer->about_us !!}
					@endif
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 column">          
					<h2 class="footer-title">DỊCH VỤ</h2>
					<div class="col-xs-12 col-md-6 column">
						<ul>
							<li><a href="#"><i class="fa fa-angle-right icon-right"></i>Trang chủ</a></li>
						</ul> 
					</div>
					<div class="col-xs-12 col-md-6 column">
						<ul>
							<li><a href="#"><i class="fa fa-angle-right icon-right"></i>Trang chủ</a></li>
						</ul> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 column">          
					<h2 class="footer-title">NEWLETTER</h2>
					<ul>
						<li>
							<p>Nhận thông tin khuyến mãi từ chúng tôi:</p>
							<p> 
								<form action="{{ route('newletter.create') }}" method="post">
									{{ csrf_field() }}
									<input type="text" name="email" class="input-newslatter" placeholder="Email của bạn..." >
									<button type="submit" class="btn-newslatter "><i class="glyphicon glyphicon-envelope"></i></button>
									@if ($errors->any())
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								        </ul>
									@endif
								</form>
							</p>
							<div class="martop-25 line3">
								<div class="icon-circle pull-left">
									<a href="{{ $header->facebook }}" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
								</div>
								<div class="icon-circle pull-left">
									<a href="{{ $header->twittter }}" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
								</div>
								<div class="icon-circle pull-left">
									<a href="{{ $header->google }}" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
								</div>
								<div class="icon-circle pull-left">
									<a href="{{ $header->pinterest }}" class="igoogle" title="Pinterest"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</li>
					</ul> 
					
				</div>
			</div>
		</div>
	</div>
	<p class="text-center copy">&copyCopyright 2017</p>
        </footer><!-- Footer-->