@extends('Admin.layouts.master')
@section('title')
    Edit Courses
@endsection
@section('css')
    <link href="{{ asset('assets/Admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/Admin/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/Admin/plugins/sumoselect/sumoselect-rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/Admin/plugins/telephoneinput/telephoneinput-rtl.css')}}">

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Courses</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Edit</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Admin.layouts.messages_alert')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-gray-200 p-4">
                                <form action="{{  route('admin.courses.update', 'test') }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="id" value="{{$edit->id}}">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" value="{{$edit->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" value="{{$edit->description}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lessons</label>
                                        <input class="form-control" type="text" name="lessons" value="{{$edit->lessons}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Levels</label>
                                        <input class="form-control" type="text" name="level" value="{{$edit->level}}" required>
                                    </div>
                                    <label>Image</label>
                                    <div class="form-group">

                                        @if ($edit->image != null)
                                            <img src="{{ asset('Images/'.$edit->image) }}" style="width: 150px; height: 150px" />
                                        @else
                                            <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" style="width: 150px; height: 150px" />
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="file" class="dropify" data-height="150" name="image" accept="image/*" value="{{$edit->image}}">
                                        </div>
                                    </div>
                                    <button class="btn btn-main-primary pd-x-20">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script src="{{ asset('assets/Admin/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fileuploads/js/file-upload.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <script src="{{ asset('assets/Admin/js/advanced-form-elements.js')}}"></script>
    <script src="{{ asset('assets/Admin/js/select2.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/telephoneinput/telephoneinput.js')}}"></script>
    <script src="{{ asset('assets/Admin/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection