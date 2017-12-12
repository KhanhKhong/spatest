@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="page-heading">Edit Schedule</h1>
        </div>
        <div class="col-lg-2"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <form action="{{ route('schedule.update') }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <input type="text" hidden="true" name="schedule_id" value="{{ isset($editItems) ? $editItems->id : '' }}">
                    <div class="panel-body">
                        <div class="row">
							<div class="col-lg-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name" value="{{ isset($editItems) ? $editItems->name : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" name="phone" value="{{ isset($editItems) ? $editItems->phone : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="{{ isset($editItems) ? $editItems->email : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Time</label>
                                    <input class="form-control" name="time" value="{{ isset($editItems) ? $editItems->time : '' }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description">{{ isset($editItems) ? $editItems->description : '' }}</textarea>  
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
        </div>
        <div class="col-lg-1"></div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection