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
            <h4 class="content-title mb-0 my-auto"> رؤية ورسالة </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ااضافة
                المركز </span>
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
                <div class="">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp;اضافة بيانات المركز </button><br><br>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">رؤية المركز بالعربي</th>
                                <th class="border-bottom-0">رؤية المركز بالانجليزي</th>
                                <th class="border-bottom-0"> رسالة المركز بالعربي</th>
                                <th class="border-bottom-0"> رسالة المركز بالانجليزي</th>
                                <th class="border-bottom-0"> قيم المركز بالعربي </th>
                                <th class="border-bottom-0">  قيم المركز بالانجليزي</th>
                          

                                <th class="border-bottom-0"></th>
                                <th class="border-bottom-0"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($visions as $vision)
                            <tr>
                                <td>{{$vision->id}}</td>
                             
                                <td>{!! Str::limit($vision->vision_ar) !!}</td>
                                <td>{!! Str::limit($vision->vision) !!}</td>
                                <td>{!! Str::limit($vision->message_ar,30) !!}</td>
                                <td>{!! Str::limit($vision->message,30) !!}</td>
                                <td>{!! Str::limit($vision->values_ar,30) !!}</td>
                                <td>{!! Str::limit($vision->values,30) !!}</td>
        

                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$vision->id}}" title="">
                                        <i class="fa fa-edit"></i></button></td>

                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$vision->id}}" title="">
                                        <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!--  edit model -->
                            <div class="modal fade" id="edit{{$vision->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                تعديل البيانات
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <form action="{{route('visions.update',$vision->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{method_field('put')}}
                                                <div class="repeater-add">
                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>رؤية  المركز بالعربي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="vision_ar" class="form-control" id="inputEmail5" value="{{$vision->vision_ar}}">
                                                            @error('vision_ar')
                                                            <span class="form-text text-danger">{{ $vision_ar }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>  رؤية  المركز  بالانجليزي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="vision" class="form-control" id="inputEmail5" value="{{$vision->vision}}">
                                                            @error('vision')
                                                            <span class="form-text text-danger">{{ $vision }}</s>
                                                                @enderror
                                                        </div>
                                                       
                                                    </div>


                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>رسالة  المركز بالعربي   : <span class="text-danger">*</span></label>
                                                            <input type="text" name="message_ar" class="form-control" id="inputEmail5" value="{{$vision->message_ar}}">
                                                            @error('message_ar')
                                                            <span class="form-text text-danger">{{ $message_ar }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> رسالة  المركز بالانجليزي   : <span class="text-danger">*</span></label>
                                                            <input type="text" name="message" class="form-control" id="inputEmail5" value="{{$vision->message}}">
                                                            @error('message')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label> قيم  المركز بالعربي  : <span class="text-danger">*</span></label>
                                                            <input type="text" name="values_ar" class="form-control" id="inputEmail5" value="{{$vision->values_ar}}">
                                                            @error('values_ar')
                                                            <span class="form-text text-danger">{{ $values_ar }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>  قيم  المركز بالانجليزي  : <span class="text-danger">*</span></label>
                                                            <input type="text" name="values" class="form-control" id="inputEmail5" value="{{$vision->values}}">
                                                            @error('values')
                                                            <span class="form-text text-danger">{{ $values }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                   


                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <button type="submit" class="btn btn-primary x-small" value="Add shipping Address"> <i class="fa fa-plus"></i> تعديل</button>
                                                            <button type="reset" class="btn btn-warning x-small" value="Add shipping Address"><i class="fa fa-share"></i>مسح </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- end edit model -->

                                    
                            
                                <!-- Deleted -->
                                <div class="modal fade" id="delete{{$vision->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                    حذف بيانات 
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('visions.destroy',$vision->id)}}" method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    هل تريد حذف بيانات  ؟!
                                                    <input id="id" type="hidden" name="id" class="form-control" value="{{$vision->id}}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-danger">حذف
                                                            البيانات</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <!-- add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات رؤية ورسالة المركز </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('visions.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="repeater-add">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>رؤية  المركز بالعربي : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="vision_ar" class="form-control" id="inputEmail5" value="{{old('vision_ar')}}"></textarea>
                                    @error('vision_ar')
                                    <span class="form-text text-danger">{{ $vision_ar }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> رؤية  المركز  بالانجليزي : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="vision" class="form-control" id="inputEmail5" value="{{old('vision')}}"></textarea>
                                    @error('vision')
                                    <span class="form-text text-danger">{{ $vision }}</s>
                                        @enderror
                                </div>
                               
                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>رسالة  المركز بالعربي   : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="message_ar" class="form-control" id="inputEmail5" value="{{old('message_ar')}}"></textarea>
                                    @error('message_ar')
                                    <span class="form-text text-danger">{{ $message_ar }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> رسالة  المركز بالانجليزي   : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="message" class="form-control" id="inputEmail5" value="{{old('message')}}"></textarea>
                                    @error('message')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> قيم  المركز بالعربي  : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="values_ar" class="form-control" id="inputEmail5" value="{{old('values_ar')}}"></textarea>
                                    @error('values_ar')
                                    <span class="form-text text-danger">{{ $values_ar }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>  قيم  المركز بالانجليزي  : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="values" class="form-control" id="inputEmail5" value="{{old('values')}}"></textarea>
                                    @error('values')
                                    <span class="form-text text-danger">{{ $values }}</s>
                                        @enderror
                                </div>
                            </div>

                           


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-info x-small" value="Add shipping Address"> <i class="fa fa-plus"></i> اضافة</button>
                                    <button type="reset" class="btn btn-warning x-small" value="Add shipping Address"><i class="fa fa-share"></i>مسح </button>
                                </div>
                            </div>
                        </div>
                    </form>
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