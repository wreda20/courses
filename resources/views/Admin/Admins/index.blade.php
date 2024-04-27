@extends('Admin.layouts.master')
@section('title')
     Admin List
@stop
@section('css')

    <!-- Internal Data table css -->
    <link href="{{ asset('assets/Admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin List</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Admins</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')


    <!-- row opened -->
    <div class="row row-sm">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
    @endif

    <!--/div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="col-sm-1 col-md-2">
                        <!-- Controller User -> Creat -> (Add User) Page -->
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.admins.create') }}">Add Admin</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive hoverable-table">
                        <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                            <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-10p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-10p border-bottom-0">Admin Type</th>
                                <th class="wd-10p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $key => $admin)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $admin->name }}</td>
                                    <td class="text-center">{{ $admin->email }}</td>
                                    <td class="text-center">
                                        @if ($admin->Status == 'Online')
                                            <span class="label text-success d-flex">
													<div class="dot-label bg-success ml-1"></div>{{ $admin->Status }}
												</span>
{{--                                        @else--}}
{{--                                            <span class="label text-danger d-flex">--}}
{{--													<div class="dot-label bg-danger ml-1"></div>{{ $admin->Status }}--}}
{{--												</span>--}}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if (!empty($admin->getRoleNames()))
                                            @foreach ($admin->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-sm btn-info"
                                           title="Edit"><i class="las la-pen"></i>
                                        </a>

                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                           data-user_id="{{ $admin->id }}" data-username="{{ $admin->name }}"
                                           data-toggle="modal" href="#modaldemo8" title="Delete"><i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!-- Modal effects -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Delete Admin</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('admin.admins.destroy', 'test') }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p> ? Are Sure Of The Deleting Process  </p><br>
                            <input type="hidden" name="id" value="{{ $admin->id }}">
                            <input class="form-control" name="name" id="name" value="{{ $admin->name }}" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <!-- /Modal effects -->

    </div>


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
    <script src="{{ asset('assets/Admin/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ asset('assets/Admin/plugins/notify/js/notifit-custom.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/table-data.js') }}"></script>

    <script src="{{ asset('assets/Admin/js/modal.js') }}"></script>



@endsection