@extends('layouts.master2')
@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

@endsection
@section('title')
طلبات العميل
@endsection
@section('content')
<!-- row -->

<br>

<style>
    @media print {
        #print_B {
            display: none;
        }
    }
</style>
<div class="row row-sm">
    <div class="col-md-12 col-xl-12">
        <div class=" main-content-body-invoice" id="print">
            <div class="card card-invoice">
                <div class="card-body">
                    <div class="invoice-header">
                        <h1 class="invoice-title">طلباتي</h1>

                    </div><!-- invoice-header -->
                    <div class="row mg-t-20">
                        <div class="col-md">

                            <div class="billed-to">
                                <h6>العميل :{{$client->name}}</h6>

                            </div>
                        </div>
                        <div class="col-md">

                        </div>
                    </div>
                    @if($client->orders->count() > 0 )
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم العميل</th>
                                    <th class="border-bottom-0">حالة الطلب </th>
                                    <th class="border-bottom-0">طريقة الدفع </th>
                                    <th class="border-bottom-0"> الاشعار </th>
                                    <th class="border-bottom-0">تاريخ الطلب </th>
                                    <th class="border-bottom-0">المبلغ</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($client->orders as $item)
                                <tr>
                                    <td>{{$item->order_no}}</td>
                                    <td>{{$item->user->name}}</td>
                                    @if($item->status_id == 2)
                                    <td><label for="" class="badge badge-success">{{$item->status->name}}</label></td>
                                    @else
                                    <td><label for="" class="badge badge-danger">{{$item->status->name}}</label></td>
                                    @endif
                                    @if($item->paid_way == 0)
                                    <td><label class="badge badge-success">cache</label></td>
                                    @else
                                    <td><label class="badge badge-danger">Mbook</label></td>
                                    @endif
                                    <td data-toggle="modal" data-target="#img_show{{$item->id}}">
                                        @if($item->image)

                                        <img src="/uploads/{{$item->image}}" width="40px" class="rounded-circle">
                                        <a href="/uploads/{{$item->image}}" download><i class="fa fa-download"></i></a>
                                        @else <label class="btn btn-dark">تم الدفع كاش</label>
                                        @endif
                                    </td>
                                    <td>{{$item->created_at->toFormattedDateString()}} </td>
                                    <td>${{number_format($item->total,2)}}</td>

                                </tr>



                                <!--  img- show -->
                                <div class="modal fade" id="img_show{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">


                                                <center><img src="/uploads/{{$item->image}}" width="800px"></center>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- img show -->
                                @endforeach


                                <tr>
                                    <td class="tx-right tx-uppercase tx-bold tx-inverse">الاجمالي</td>
                                    <td class="tx-right" colspan="2">
                                        <h4 class="tx-primary tx-bold">${{number_format($subtotal,2)}}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-purple float-right mt-3 mr-2" id="print_B" onclick="printDiv()">
                        <i class="mdi mdi-printer ml-1"></i>طباعة</button>

                    @else
                    <p>لاتوجد طلبات لهذا العميل </p>
                    @endif

                </div>
            </div>
        </div>
    </div><!-- COL-END -->
</div>



<script>
    $(function() {
        $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
        });
    })
</script>
<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }
</script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection