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
        <li class="breadcrumb-item active">Sản Phẩm</li>
    </ol>
    <button type="button" class="btn btn-success"><a class="text_custom" href="{{ route('service.edit') }}">Create</a></button>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách sản phẩm</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">Image</th>
                            <th width="20%">Title</th>
                            <th width="30%">Description</th>
                            <th width="10%">price</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img src="../../source/images/{{ $item->image }}" width="100" alt=""></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('service.edit',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('service.delete',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($service->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($service->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $service->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $service->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($service->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $service->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($service->currentPage() == $service->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $service->url($service->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif

</div>
@endsection