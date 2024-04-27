@extends('Admin.layouts.master')
@section('title')
    Edit Admin
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin List</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  Edit Admin</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>خطا</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.admins.index') }}">Back</a>
                        </div>
                    </div><br>

                    {!! Form::model($admin, ['method' => 'PATCH','route' => ['admin.admins.update', $admin->id]]) !!}
                    <div class="">

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label><span class="tx-danger">*</span> :Name</label>
                                {!! Form::text('name', null, array('class' => 'form-control','required')) !!}
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label><span class="tx-danger">*</span> :Email</label>
                                {!! Form::text('email', null, array('class' => 'form-control','required')) !!}
                            </div>
                        </div>

                    </div>

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> :Password</label>
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> :Confirm Password</label>
                            {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                        </div>
                    </div>

{{--                    <div class="row row-sm mg-b-20">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <label class="form-label">:Status</label>--}}
{{--                            <select name="Status" id="select-beast" class="form-control  nice-select  custom-select">--}}
{{--                                <option value="{{ $admin->Status}}">{{ $admin->Status}}</option>--}}
{{--                                <option value="Online">Online</option>--}}
{{--                                <option value="Offline">Offline</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mg-b-20">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">:Roles Admin</label>
                                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple'))
                                !!}
                            </div>
                        </div>
                    </div>
                    <div class="mg-t-30">
                        <button class="btn btn-main-primary pd-x-20" type="submit">Send</button>
                    </div>
                    {!! Form::close() !!}
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
@endsection