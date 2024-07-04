@extends('layouts.master2')
@section('css')
<!-- Internal Data table css -->
<link href="{{ URL::asset('admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('admin/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admin/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('admin/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admin/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admin/plugins/prism/prism.css') }}" rel="stylesheet">
<link href="{{ URL::asset('admin/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
<br>
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الطلبات </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الادارة
                الطلبات</span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')

@include('errors._message')
@include('errors.deletedone')
<!-- row -->
<div class="row">

    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم العميل</th>
                                <th class="border-bottom-0">تاريخ الطلب </th>
                                <th class="border-bottom-0">اجمالي الطلب</th>
                                <th class="border-bottom-0">تفاصيل الطلب </th>
                                <th class="border-bottom-0">حالة الطلب </th>
                                <th class="border-bottom-0">حالة الدفع </th>
                                <th class="border-bottom-0">طريقة الدفع </th>
                                <th class="border-bottom-0"> الاشعار </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->order_no}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->created_at->toFormattedDateString()}} </td>
                                <td>${{number_format($order->total,2)}}</td>
                                <td><a href="{{url('dashboard/show-order',$order->id)}}"> <label for="" class="badge badge-primary"><i class="fa fa-eye"></i>عرض </label></a></td>

                                @if($order->status_id == 2)
                                <td><a href="{{url('dashboard/update-order',$order->id)}}"> <label for="" class="badge badge-success"><i class="fa fa-edit"></i>{{$order->status->name ?? ''}}</label></a></td>
                                @else
                                <td><a href="{{url('dashboard/update-order',$order->id)}}"><label for="" class="badge badge-danger"><i class="fa fa-edit"></i>{{$order->status->name ?? ''}}</label></a></td>
                                @endif

                                @if($order->paid_id == 2)
                                <td><a href="{{url('dashboard/status-paid-order',$order->id)}}"> <label for="" class="badge badge-danger"><i class="fa fa-edit"></i>{{$order->paid->paid ?? ''}}</label></a></td>
                                @else
                                <td><a href="{{url('dashboard/status-paid-order',$order->id)}}"><label for="" class="badge badge-success"><i class="fa fa-edit"></i>{{$order->paid->paid ?? ''}}</label></a></td>
                                @endif

                                @if($order->paid_way == 0)
                                <td><label class="badge badge-success">cache</label></td>
                                @else
                                <td><label class="badge badge-danger">Mbook</label></td>
                                @endif
                                <td data-toggle="modal" data-target="#img_show{{$order->id}}">
                                    @if($order->image)

                                    <img src="/uploads/{{$order->image}}" width="40px" class="rounded-circle">
                                    <a href="/uploads/{{$order->image}}" download><i class="fa fa-download"></i></a>
                                    @else <label class="badge badge-dark">تم الدفع كاش</label>
                                    @endif
                                </td>

                            </tr>
                            <!--  img- show -->
                            <div class="modal fade" id="img_show{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center><img src="/uploads/{{$order->image}}" width="400px" class="rounded-circle"></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- img show -->
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        @endsection
        @section('js')
        <!-- Internal Select2 js-->
        <script src="{{ URL::asset('admin/plugins/notify/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/notify/js/notifit-custom.js') }}"></script>

        <script src="{{ URL::asset('admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('admin/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
        <!--Internal  Datatable js -->
        <script src="{{ URL::asset('admin/js/table-data.js') }}"></script>
        @endsection