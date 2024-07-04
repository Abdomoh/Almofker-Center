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
            <h4 class="content-title mb-0 my-auto"> اعمالنا </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ااضافة
                اعمالنا</span>
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp;اضافة عمل جديد </button><br><br>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">اسم المشروع</th>
                                <th class="border-bottom-0">قسم</th>
                                <th class="border-bottom-0">العميل</th>
                                <th class="border-bottom-0"> شعار العميل</th>
                                <th class="border-bottom-0"> رابطج المشروع</th>
                                <th class="border-bottom-0"> تاريخ تنفيذ المشروع</th>
                                <th class="border-bottom-0"> صورة المشروع</th>
                                <th class="border-bottom-0"> صورة المشروع</th>
                                <th class="border-bottom-0"></th>

                                <th class="border-bottom-0"></th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach($works as $work)
                            <tr>
                                <td>{{$work->id}}</td>
                                <td>{{$work->name}}</td>
                                <td>{{$work->category->name}}</td>
                                <td>{{$work->client}}</td>
                                <td>{{$work->logo_client}}</td>
                                <td>{{$work->url}}</td>
                                <td>{{$work->date}}</td>
                                <td data-toggle="modal" data-target="#img_show{{$work->id}}"><img src="../uploads/{{$work->img1}}" width="40px" class="rounded-circle">
                                <td data-toggle="modal" data-target="#img2_show{{$work->id}}"><img src="../uploads/{{$work->img2}}" width="40px" class="rounded-circle">
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$work->id}}" title="">
                                        <i class="fa fa-edit"></i></button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$work->id}}" title="">
                                        <i class="fa fa-trash"></i></button>
                                </td>

                            </tr>

                            <!--  edit model -->
                            <div class="modal fade" id="edit{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


                                            <form action="{{route('works.update',$work->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{method_field('PUT')}}
                                                <div class="repeater-add">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>اسم المشروع : <span class="text-danger">*</span></label>
                                                            <input type="text" name="name" class="form-control" id="inputEmail5" value="{{$work->name}}">
                                                            @error('name')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> اسم المشروع : <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="category_id">
                                                                <option>اختر القسم</option>
                                                                @foreach ($categoryies as $category)
                                                                <option value="{{ $category->id }}" {{$work->category_id==$category->id ? 'selected':''}}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label> العميل : <span class="text-danger">*</span></label>
                                                            <input type="text" name="client" class="form-control" id="inputEmail5" value="{{$work->client}}">
                                                            @error('client')
                                                            <span class="form-text text-danger">{{ $client }}</s>
                                                                @enderror
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label> شعار العميل : <span class="text-danger">*</span></label>
                                                            <input type="file" name="file" class="form-control" id="inputEmail5" value="{{$work->logo_client}}">
                                                            @error('logo_client')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label> رابط المشروع : <span class="text-danger">*</span></label>
                                                            <input type="text" name="url" class="form-control" id="inputEmail5" value="{{$work->url}}">
                                                            @error('url')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> تاريخ تنفيذ المشروع : <span class="text-danger">*</span></label>
                                                            <input type="date" name="date" class="form-control" id="inputEmail5" value="{{$work->date}}">
                                                            @error('date')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-12">
                                                            <label> وصف المشروع : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="description" class="form-control" id="inputEmail5">{{$work->description}}</textarea>
                                                            @error('description')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label> صورة من المشروع : <span class="text-danger">*</span></label>
                                                            <input type="file" name="img1" class="form-control" id="inputEmail5" value="{{$work->img1}}">
                                                            @error('img1')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label> صورة من المشروع : <span class="text-danger">*</span></label>
                                                            <input type="file" name="img2" class="form-control" id="inputEmail5" value="{{$work->img2}}">
                                                            @error('img2')
                                                            <span class="form-text text-danger">{{ $message }}</s>
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
                            </div>
                            <!-- end edit model -->

                            <!--  img- show -->
                            <div class="modal fade" id="img_show{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">


                                            <center><img src="../uploads/{{$work->img1}}" width="400px" class="rounded-circle"></center>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- img show -->

                            <!-- Deleted -->
                            <div class="modal fade" id="delete{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                حذف بيانات العمل
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('works.destroy',$work->id)}}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                هل تريد حذف بيانات العمل ؟!
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{$work->id}}">
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
                        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('works.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="repeater-add">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>اسم المشروع : <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="inputEmail5" value="{{old('name')}}">
                                    @error('name')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> اسم المشروع : <span class="text-danger">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option>اختر القسم</option>
                                        @foreach ($categoryies as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> العميل : <span class="text-danger">*</span></label>
                                    <input type="text" name="client" class="form-control" id="inputEmail5" value="{{old('client')}}">
                                    @error('client')
                                    <span class="form-text text-danger">{{ $client }}</s>
                                        @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label> شعار العميل : <span class="text-danger">*</span></label>
                                    <input type="file" name="file" class="form-control" id="inputEmail5" value="{{old('logo_client')}}">
                                    @error('logo_client')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> رابط المشروع : <span class="text-danger">*</span></label>
                                    <input type="text" name="url" class="form-control" id="inputEmail5" value="{{old('url')}}">
                                    @error('url')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> تاريخ تنفيذ المشروع : <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" id="inputEmail5" value="{{old('date')}}">
                                    @error('date')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label> وصف المشروع : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="description" class="form-control" id="inputEmail5"></textarea>
                                    @error('description')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> صورة من المشروع : <span class="text-danger">*</span></label>
                                    <input type="file" name="img1" class="form-control" id="inputEmail5" value="{{old('img1')}}">
                                    @error('img1')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label> صورة من المشروع : <span class="text-danger">*</span></label>
                                    <input type="file" name="img2" class="form-control" id="inputEmail5" value="{{old('img2')}}">
                                    @error('img2')
                                    <span class="form-text text-danger">{{ $message }}</s>
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