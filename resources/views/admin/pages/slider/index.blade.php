@extends('admin.master')
@section('head_css')
<link href="{{ asset('admin_source/css/custom.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">News</li>
    </ol>
    <button type="button" class="btn btn-success"><a class="text_custom" href="{{ route('slider.edit') }}">Create</a></button>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách News</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">slide image</th>
                            <th width="30%">Slogan</th>
                            <th width="35%">Mô tả</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slider as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="text-justify"><img width="100" src="../../source/images/{{$item->image}}" alt=""></td>
                            <td class="text-justify">{{ $item->title }}</td>
                            <td class="text-justify">{{ $item->sub_title }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('slider.edit',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('slider.delete',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection