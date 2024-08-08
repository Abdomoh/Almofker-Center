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
            <h4 class="content-title mb-0 my-auto">  مجالات المركز </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ بيانات مجالات
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
                                <th class="border-bottom-0"> اسم المجال بالعربي </th>
                                <th class="border-bottom-0">اسم المجال بالانجليزي  </th>
                                <th class="border-bottom-0">  نبذة عن المجال بالعربي </th>
                                <th class="border-bottom-0">  نبذة عن المجال بالانجليزي </th>
                                <th class="border-bottom-0">    صورة </th>
                          

                                <th class="border-bottom-0"></th>
                                <th class="border-bottom-0"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($fields as $field)
                            <tr>
                                <td>{{$field->id}}</td>
                             
                                <td>{{$field->title_ar}}</td>
                                <td>{{$field->title}}</td>
                                <td>{!! Str::limit($field->description_ar) !!}</td>
                                <td>{!! Str::limit($field->description) !!}</td>
                                <td data-toggle="modal" data-target="#img_show{{$field->id}}"><img src="../uploads/fields/{{$field->image}}" width="40px" class="rounded-circle">
        

                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{$field->id}}" title="">
                                        <i class="fa fa-edit"></i></button></td>

                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$field->id}}" title="">
                                        <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!--  edit model -->
                            <div class="modal fade" id="edit{{$field->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


                                            <form action="{{route('fields.update',$field->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{method_field('put')}}
                                                <div class="repeater-add">
                                                    <div class="form-row">
                        
                                                        <div class="form-group col-md-6">
                                                            <label>   اسم المجال بالعربي : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="title_ar" class="form-control" id="inputEmail5" value="">{{$field->title_ar}}</textarea>
                                                            @error('title_ar')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> اسم المجال بالانجليزي : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="title" class="form-control" id="inputEmail5" value="">{{$field->title}}</textarea>
                                                            @error('title')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                       
                                                    </div>
                        
                        
                                                    <div class="form-row">
                        
                                                        <div class="form-group col-md-6">
                                                            <label>   نبذة عن المجال بالعربي   : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="description_ar" class="form-control" id="inputEmail5" value="">{{$field->description_ar}}</textarea>
                                                            @error('description_ar')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> نبذة عن المجال بالانجليزي    : <span class="text-danger">*</span></label>
                                                            <textarea type="text" name="description" class="form-control" id="inputEmail5">{{$field->description}}</textarea>
                                                            @error('description')
                                                            <span class="form-text text-danger">{{ $message }}</s>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                        
                                        
                                                        <div class="form-group col-md-6">
                                                            <label>   صورة   تعبر عن المجال  : <span class="text-danger">*</span></label>
                                                            <input type="file" name="image" class="form-control" id="inputEmail5" value="{{$field->image}}" >
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
                                <div class="modal fade" id="delete{{$field->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form action="{{route('fields.destroy',$field->id)}}" method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    هل تريد حذف بيانات  ؟!
                                                    <input id="id" type="hidden" name="id" class="form-control" value="{{$field->id}}">
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
                        <h5 class="modal-title" id="exampleModalLabel">اضافة بيانات مجالات المركز   </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('fields.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="repeater-add">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>   اسم المجال بالعربي : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="title_ar" class="form-control" id="inputEmail5" value="">{{old('title_ar')}}</textarea>
                                    @error('title_ar')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> اسم المجال بالانجليزي : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="title" class="form-control" id="inputEmail5" value="">{{old('title')}}</textarea>
                                    @error('title')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                               
                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>   نبذة عن المجال بالعربي   : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="description_ar" class="form-control" id="inputEmail5" >{{old('description_ar')}}</textarea>
                                    @error('description_ar')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> نبذة عن المجال بالانجليزي    : <span class="text-danger">*</span></label>
                                    <textarea type="text" name="description" class="form-control" id="inputEmail5" value="">{{old('description')}}</textarea>
                                    @error('description')
                                    <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">

                
                                <div class="form-group col-md-6">
                                    <label>     صورة تعبر عن المجال  : <span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control" id="inputEmail5" value="{{old('image')}}" required>
                                    @error('image')
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