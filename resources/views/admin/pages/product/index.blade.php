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
    <button type="button" class="btn btn-success"><a class="text_custom" href="{{ route('product.edit') }}">Create</a></button>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách sản phẩm</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="10%">Image</th>
                            <th width="15%">Title</th>
                            <th width="25%">Mô tả ngắn</th>
                            <th width="15%">Price sale(đ)</th>
                            <th width="15%">Price(đ)</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img width="100%" src="../source/images/{{ $item->image }}" alt=""></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->short_description }}</td>
                            <td>{{ $item->price_sale }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('product.edit',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('product.delete',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($product->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($product->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $product->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $product->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($product->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $product->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($product->currentPage() == $product->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $product->url($product->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif

</div>
@endsection