@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">Create Product</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <form action="{{ route('news.update') }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <input type="text" hidden="true" name="news_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-10">
                                <div class="item form-group">
                                    <label class="control-label" for="picture" style="display: block">Image<span class="required">*</span>
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Browse… <input id="picture" type="file" class="loadFile" name="image" accept="image/*" style="display: none">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="image" name="image1" readonly="">
                                        </div>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" name="title" value="{{ isset($editItems) ? $editItems->title : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="editor2" class="ckeditor" name="description">{{ isset($editItems) ? $editItems->description : '' }}</textarea>  
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
									<select class="js-example-basic-single form-control" name="news_category_id">
						                <option value="0">Select Category</option>
                                        @foreach($cate as $row) 
                                            <option value="{{ $row->id }}" {{ (isset($editItems) ? $editItems->news_category_id : '') == $row->id ? 'selected="selected"' : '' }}>{{ $row->title }}</option>
                                        @endforeach
									</select>
                                </div>
							</div>
                        </div>
                        <button type="submit" class="btn btn-success">Create Product</button>
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
<script src="/templateEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor2' );
	$(document).ready(function() {
	    $('.js-example-basic-single').select2();
	});
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