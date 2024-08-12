@extends('layouts.master2')
@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

@endsection
@section('title')
رسالة العميل
@endsection
@section('content')
<!-- row -->

<div class="row row-sm">
    <div class="col-md-12 col-xl-12">
        <div class=" main-content-body-invoice" id="print">
            <div class="card card-invoice">
                <div class="card-body">
                    <div class="invoice-header">
                        <h1 class="invoice-title">رسالة</h1>

                    </div><!-- invoice-header -->
                    <div class="row mg-t-20">
                        <div class="col-md">

                            <div class="billed-to">
                                <h6>العميل :{{$contact->name}}</h6>

                            </div>
                        </div>
                        <div class="col-md">

                        </div>
                    </div>
                   
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                            <thead>
                                <tr>
                                    
                                    <th class="border-bottom-0">نص الرسالة</th>
                                </tr>
                            </thead>
                            <tbody>

                           
                                <tr>
                                    <td>{{$contact->message}}</td>
                               
                                   
                                </tr>



                                

                             
                            </tbody>
                        </table>
                    </div>
                   

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