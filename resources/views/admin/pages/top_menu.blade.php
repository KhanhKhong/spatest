@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">Edit Header</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('header') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" hidden="true" name="header_id" value="{{ $header->id }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (!empty($header))
                                <div class="form-group">
                                    <label class="control-label" for="picture" style="display: block">Logo<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="picture" type="file" class="loadFile" name="logo" accept="image/*" style="display: none">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="image" value="{{ $header->logo }}" readonly="">
                                        </div>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Slogan</label>
                                    <input class="form-control" name="slogan" value="{{ $header->slogan }}">
                                </div>
                                <div class="form-group">
                                    <label>Link facebook</label>
                                    <input class="form-control" name="facebook" value="{{ $header->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label>Link Google</label>
                                    <input class="form-control" name="google" value="{{ $header->google }}">
                                </div>
                                <div class="form-group">
                                    <label>Link Twitter</label>
                                    <input class="form-control" name="twitter" value="{{ $header->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label>Link Pinterest</label>
                                    <input class="form-control" name="pinterest" value="{{ $header->pinterest }}">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại (+84)</label>
                                    <input type="number" class="form-control" name="phone" value="{{ $header->phone }}">
                                </div>
								@endif
							</div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Sửa</button>
                        <!-- /.row (nested) -->
                    </div>
                </form>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-1"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection
@section('footer_script')
<script type="text/javascript">
    $('.loadFile').change(function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('profilePhoto');
            document.getElementById("image").value = document.getElementById("picture").value;
            output.src = reader.result;
        };
        
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection