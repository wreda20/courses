@extends('Admin.layouts.master')
@section('title')
    Add Admin
@endsection
@section('css')
    <link href="{{asset('assets/Admin/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin List</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Admin</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <!-- Session -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Errors</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- End Session -->

            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.admins.index') }}">Back</a>
                        </div>
                    </div><br>
                    <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                          action="{{route('admin.admins.store','test')}}" method="post">
                        {{csrf_field()}}

                        <div class="">
                            <div class="row mg-b-20">
                                <!-- Name -->
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label><span class="tx-danger">*</span> :Name</label>
                                    <input class="form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper" name="name" required="" type="text">
                                </div>
                                <!-- Email -->
                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label><span class="tx-danger">*</span> :Email</label>
                                    <input class="form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper" name="email" required="" type="email">
                                </div>
                            </div>
                        </div>

                        <div class="row mg-b-20">
                            <!-- Password -->
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label><span class="tx-danger">*</span> :Password</label>
                                <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                       name="password" required="" type="password">
                            </div>
                            <!-- Confirm Password -->
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label><span class="tx-danger">*</span> :Confirm Password</label>
                                <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                       name="confirm-password" required="" type="password">
                            </div>
                        </div>
                        <input type="hidden" name="Status" value="Online">
{{--                        <div class="row row-sm mg-b-20">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <!-- Status User -->--}}
{{--                                <label class="form-label">:Status</label>--}}
{{--                                <select name="Status" id="select-beast" class="form-control  nice-select  custom-select">--}}
{{--                                    <option >Online</option>--}}
{{--                                    <option value="Offline">Offline</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row mg-b-20">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <!-- User Roles -->
                                    <label class="form-label">:Roles Admin</label>
                                    <!-- Form In Laravel *-- Choose One Option Or Two Option -->
                                    {!! Form::select('roles_name[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                </div>
                            </div>
                        </div>
                        <!-- Send -->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button class="btn btn-main-primary pd-x-20" type="submit">Send</button>
                        </div>
                    </form>
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
    <script src="{{asset('assets/Admin/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('assets/Admin/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    <!--Internal  Parsley.min js -->
    <script src="{{asset('assets/Admin/plugins/parsleyjs/parsley.min.js')}}"></script>
    <!-- Internal Form-validation js -->
    <script src="{{asset('assets/Admin/js/form-validation.js')}}"></script>
@endsection