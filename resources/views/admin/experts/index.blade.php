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
            <h4 class="content-title mb-0 my-auto">  خبراء  المركز </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ بيانات مجالات
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>&nbsp;اضافة بيانات الخبراء </button><br><br>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">  اسم  الخبير بالعربي </th>
                                <th class="border-bottom-0">اسم الخبير  بالانجليزي  </th>
                                <th class="border-bottom-0"> المسمي الوظيفي </th>
                                <th class="border-bottom-0">  نبذة عن الخبير بالعربي </th>
                                <th class="border-bottom-0">  نبذة عن الخبير بالانجليزي </th>
                                <th class="border-bottom-0">    السيرة الذاتية </th>
                          

                                <th class="border-bottom-0"></th>
                                <th class="border-bottom-0"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($experts as $expert)
                            <tr>
                                <td>{{$expert->id}}</td>
                             
                                <td>{{$expert->name}}</td>
                                <td>{{$expert->name}}</td>
                                <td>{{$expert->job}}</td>
                                <td>{!! Str::limit($expert->brief_ar) !!}</td>
                                <td>{!! Str::limit($expert->brief) !!}</td>
                                <td><a href="../uploads/experts/{{$expert->cv}}" width="40px" class="rounded-circle" download="cv">download</a></td>
        

                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$expert->id}}" title="">
                                        <i class="fa fa-edit"></i></button></td>

                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$expert->id}}" title="">
                                        <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!--  edit model -->
                            <div class="modal fade" id="edit{{$expert->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


                                            <form action="{{route('experts.update',$expert->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{method_field('put')}}
                                                <div class="repeater-add">
                                                    <div class="form-row">
                        
                                                        <div class="form-group col-md-6">
                                                            <label>   اسم الخبير  بالعربي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="name_ar" class="form-control" id="inputEmail5" value="{{$expert->name_ar}}">
                                                            @error('title_ar')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> اسم الخبير  بالانجليزي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="name" class="form-control" id="inputEmail5" value="{{$expert->name}}">
                                                            @error('title')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                       
                                                    </div>

                                                    <div class="form-row">
                        
                                                        <div class="form-group col-md-6">
                                                            <label>   المسمي الوظيفي   بالعربي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="job_ar" class="form-control" id="inputEmail5" value="{{$expert->job_ar}}">
                                                            @error('title_ar')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> المسمي الوظيفي   بالانجليزي : <span class="text-danger">*</span></label>
                                                            <input type="text" name="job" class="form-control" id="inputEmail5" value="{{$expert->job}}">
                                                            @error('title')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                       
                                                    </div>
                        
                        
                                                    <div class="form-row">
                        
                                                        <div class="form-group col-md-6">
                                                            <label>   نبذة الخبير   بالعربي   : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="brief_ar" class="form-control" id="inputEmail5" value="">{{$expert->brief_ar}}</textarea>
                                                            @error('description_ar')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> نبذة عن الخبير بالانجليزي    : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="brief" class="form-control" id="inputEmail5">{{$expert->brief}}</textarea>
                                                            @error('description')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                        
                                        
                                                        <div class="form-group col-md-6">
                                                            <label>  صورة     : <span class="text-danger">*</span></label>
                                                            <input type="file" name="cv" class="form-control" id="inputEmail5" value="{{$expert->cv}}" >
                                                            @error('image')
                                                            <span class="form-text text-danger">{{ $messsage }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>
                        
                                                   
                        
                        
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <button type="submit" class="btn btn-info x-small" value="Add shipping Address"> <i class="fa fa-plus"></i> تعديل</button>
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
                                <div class="modal fade" id="delete{{$expert->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{route('experts.destroy',$expert->id)}}" method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    هل تريد حذف بيانات  ؟!
                                                    <input id="id" type="hidden" name="id" class="form-control" value="{{$expert->id}}">
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
                        <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات الخبراء    </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('experts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="repeater-add">
                            <div class="form-row">
                        
                                <div class="form-group col-md-6">
                                    <label>   اسم الخبير  بالعربي : <span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control" id="inputEmail5" value="{{old('name_ar')}}">
                                    @error('name_ar')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> اسم الخبير  بالانجليزي : <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="inputEmail5" value="{{old('name')}}">
                                    @error('name')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                               
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>   المسمي الوظيفي   بالعربي : <span class="text-danger">*</span></label>
                                    <input type="text" name="job_ar" class="form-control" id="inputEmail5" value="{{old('job_ar')}}">
                                    @error('job_ar')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> المسمي الوظيفي   بالانجليزي : <span class="text-danger">*</span></label>
                                    <input type="text" name="job" class="form-control" id="inputEmail5" value="{{old('job')}}">
                                    @error('job')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                               
                            </div>
                           
                        
                            <div class="form-row">
                        
                                <div class="form-group col-md-6">
                                    <label>   نبذة الخبير   بالعربي   : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="brief_ar" class="form-control" id="inputEmail5" value="">{{old('brief_ar')}}</textarea>
                                    @error('brief_ar')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> نبذة عن الخبير بالانجليزي    : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="brief" class="form-control" id="inputEmail5" required> {{old('brief')}}</textarea>
                                    @error('brief')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">

                
                                <div class="form-group col-md-6">
                                    <label>  صورة     : <span class="text-danger">*</span></label>
                                    <input type="file" name="cv" class="form-control" id="inputEmail5" value="{{old('cv')}}"  required>
                                    @error('cv')
                                    <span class="form-text text-danger">{{ $messsage }}</s>
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