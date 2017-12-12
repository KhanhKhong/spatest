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
        <li class="breadcrumb-item active">Lịch hẹn</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i>Lịch hẹn</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="20%">Name</th>
                            <th width="20%">Phone</th>
                            <th width="20%">Email</th>
                            <th width="10%">Time</th>
                            <th width="10%">Description</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schedule as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->time }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <button class="btn btn-warning"><a class="text_custom" href="{{ route('schedule.edit',['id'=>$item->id]) }}">Edit</a></button>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('schedule.delete',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($schedule->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($schedule->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $schedule->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $schedule->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($schedule->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $schedule->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($schedule->currentPage() == $schedule->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $schedule->url($schedule->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif

</div>
@endsection