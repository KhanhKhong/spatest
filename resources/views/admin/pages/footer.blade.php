@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">Edit Footer</h1>
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
                <form action="{{ route('footer.update') }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <input type="text" hidden="true" name="footer_id" value="{{ isset($footer) ? $footer->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-10">
                                <div class="form-group">
                                    <label>About us</label>
                                    <textarea id="editor2" class="ckeditor" name="about_us">{{ isset($footer) ? $footer->about_us : '' }}</textarea>  
                                </div>
							</div>
                        </div>
                        <button type="submit" class="btn btn-success">Edit</button>
                        <!-- /.row (nested) -->
                    </div>
                </form>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <br><br><br>
            <div class="card mb-3">
                <div class="card-header"><i class="fa fa-table"></i>New letter</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">Email</th>
                                    <th width="15%">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($letter as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td class="text-justify">{{ $item->email }}</td>
                                    <td>
                                        <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('newletter.delete',['id'=>$item->id]) }}">Delete</a></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if ($letter->lastPage() > 1)
            <ul class="pagination pull-right">
                <li class="paginate_button page-item previous {{ ($letter->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
                    <a href="{{ $letter->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
                @for ($i = 1; $i <= $letter->lastPage(); $i++)
                    <li class="paginate_button page-item {{ ($letter->currentPage() == $i) ? ' active' : '' }}">
                        <a href="{{ $letter->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
                    </li>
                @endfor
                <li class="paginate_button page-item next {{ ($letter->currentPage() == $letter->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
                    <a href="{{ $letter->url($letter->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                </li>
            </ul>
            @endif
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
</script>
@endsection