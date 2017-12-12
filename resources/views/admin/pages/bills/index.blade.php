@extends('admin.master')
@section('head_css')
<link href="{{ asset('admin_source/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('admin_source/css/bill.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Đơn hàng</li>
    </ol>
    <ol></ol>
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Danh sách đơn hàng</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">Name</th>
                            <th width="10%">Gender</th>
                            <th width="15%">Email</th>
                            <th width="30%">Address</th>
                            <th width="10%">Phone</th>
                            <th width="15%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $item)
                        <tr>
                            <td data-toggle="modal" data-target="#fsModal"><input type="button" class="cus_id" value="{{ $item->id }}"></td>
                            <td>{{ $item->name }}</td>
                            @if($item->gender !=1)
                                <td>Nam</td>
                            @else
                                <td>Nữ</td>
                            @endif
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <button class="btn btn-danger"><a class="text_custom delete" href="{{ route('bills.delete',['id'=>$item->id]) }}">Delete</a></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="fsModal" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!-- dialog -->
        <div class="modal-dialog">
                <!-- content -->
            <div class="modal-content">
                <!-- header -->
                <div class="modal-header">
                    <h1 id="myModalLabel" class="modal-title">Đơn hàng</h1>
                </div>
                <!-- header -->
                <!-- modal -->
                <div class="modal-body" id="menuscontainer">
                    <h2 class="text-center">Đơn hàng bao gồm</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody class="table_data">
                            
                            <!-- <tr>
                                <td class="title"></td>
                                <th class="quantity"></th>
                                <th class="unit_price"></th>
                            </tr> -->

                        </tbody>
                        <tr>
                            <th>Tổng:</th>
                            <td class="total">Dooley</td>
                            <td class="payment">july@example.com</td>
                        </tr>
                    </table>
                    <span class="date_order">Ngày đặt: </span>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
                <!-- footer -->
            </div>
            <!-- modal -->
        </div>
            <!-- content -->
    </div>
    <!-- dialog -->
    <!-- modal -->
    @if ($customers->lastPage() > 1)
    <ul class="pagination pull-right">
        <li class="paginate_button page-item previous {{ ($customers->currentPage() == 1) ? ' disabled' : '' }}" id="dataTable_previous">
            <a href="{{ $customers->url(1) }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
        </li>
        @for ($i = 1; $i <= $customers->lastPage(); $i++)
            <li class="paginate_button page-item {{ ($customers->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $customers->url($i) }}" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        <li class="paginate_button page-item next {{ ($customers->currentPage() == $customers->lastPage()) ? ' disabled' : '' }}"  id="dataTable_next">
            <a href="{{ $customers->url($customers->currentPage()+1) }}"  aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
        </li>
    </ul>
    @endif
</div>
@endsection
@section('footer_script')
<script>
    $('.cus_id').click(function(){
        var idCus = this.value;
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "{{ route('bills_admin') }}",
            data: {idCus: idCus},
            success: function (data) {

                if(data.bills.id_customer){
                    $('.date_order').html(data.bills.date_order);
                    $('.total').html(data.bills.total);
                    $('.payment').html(data.bills.payment);

                    for (i=0; i < data.details.length; i++){
                        if(!$(".table_data").is(':empty')){
                            $('.table_data').append("<tr>"
                                +"<td class='title'>"+ data.products[i][0].title +"</td>"
                                +"<th>"+ data.details[i].quantity +"</th>"
                                +"<th>"+ data.details[i].unit_price +"</th>"
                                +"</tr>");
                        }
                    }
                    var $win = $(window);
                    var $box = $("#menuscontainer");
                    $win.on("click.Bst", function(event){      
                        if ($box.has(event.target).length == 0 && !$box.is(event.target)){
                            $('#menuscontainer').find('.table_data').children().remove();
                        }
                    });
                }
            }
        });
    });
</script>
@endsection