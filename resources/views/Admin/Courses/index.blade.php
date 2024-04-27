@extends('Admin.layouts.master')
@section('title')
    All Courses
@endsection
@section('css')
    <link href="{{ asset('assets/Admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Courses</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Courses</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary" role="button"
                       aria-pressed="true">Add Courses</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">#</th>
                                <th class="wd-10p border-bottom-0">Image</th>
                                <th class="wd-10p border-bottom-0">Title</th>
                                <th class="wd-15p border-bottom-0">Description</th>
                                <th class="wd-10p border-bottom-0 ">Files</th>
                                <th class="wd-10p border-bottom-0">Level</th>
                                <th class="wd-10p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                           <tbody>
                           @foreach($courses as $course)
                               <tr>
                                   <td class="text-center">{{ $loop->iteration }}</td>
                                   <td class="text-center">

                                       @if ($course->image != null)
                                           <img src="{{ asset('Images/'.$course->image) }}" style="width: 50px; height: 50px" />
                                       @else
                                           <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" style="width: 50px; height: 50px" />
                                       @endif
                                   </td>
                                   <td class="text-center">{{ $course->title }}</td>
                                   <td>{{ \Str::limit($course->description, 50) }}</td>
                                   <td class="text-center">{{ $course->lessons }}</td>
                                   <td class="text-center">{{ $course->level }}</td>
                                   <td class="text-center">
                                       <a class=" btn btn-sm btn-info" href="{{ route('admin.courses.edit',$course->id) }}"><i class="las la-pen"></i></a>
                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                          data-toggle="modal" href="#delete{{ $course->id }}"><i
                                                   class="las la-trash"></i></a>
                                   </td>
                               </tr>
                               @include('Admin.Courses.delete')
                           @endforeach
                           </tbody>
                        </table>
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
    <!-- Internal Data tables -->
    <script src="{{ asset('assets/Admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ asset('assets/Admin/js/table-data.js') }}"></script>
@endsection