@extends('front.master')

@section('title', 'Dịch vụ')

@section('container')
<!--service-->
<div class="container">
    <h2 class="box-heading text-uppercase text-center">Dịch vụ</h2>
    <div class="box-content">
        <h3>{{ $service->title }}</h3>
        <p>{!! $service->description !!}</p>
        <div class="clear"></div>
    </div>
</div>
<div class="container">
    <div class="main-box-contact">
        <div class="row">
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
<!--end service-->
@endsection