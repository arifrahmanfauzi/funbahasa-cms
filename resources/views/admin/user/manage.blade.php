@extends("admin.layouts.default")
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{ route("admin.user.index") }}">User</a></li>
    @if(isset($data))
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_edit')}}</li>
    @else
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_add')}}</li>
    @endIf
@endsection
@section('pageTitle')
<h1>User</h1>
@endsection
@section('pageInfo')
@endsection
@section('backBtn')
<a href="{{ route("admin.user.index") }}"><i class="fas fa-angle-left"></i> {{trans('admiko.page_back_btn')}}</a>
@endsection
@section('content')
<div class="card formPage user_manage admikoForm">
    <legend class="action">{{ isset($data) ? trans('admiko.update') : trans('admiko.add_new') }}</legend>
    <form method="POST" action="{{ $admiko_data['formAction'] }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @if(isset($data)) @method('PUT') @endIf
        @csrf
        <div class="card-body">
            @if ($errors->any())<div class="row"><div class="col-2"></div><div class="col"><div class="invalid-feedback d-block">@foreach($errors->all() as $error) {{$error}}<br> @endforeach</div></div></div>@endif
            <div class="row">
                
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Name:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Name"  value="{{{ old('name', isset($data)?$data->name : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('name')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="name_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">Email:</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Email"  value="{{{ old('email', $data->email??'') }}}">
                            <div class="invalid-feedback @if ($errors->has('email')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="email_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label">Password:</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Password"  value="">
                            @if ($errors->has('password'))<div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>@endif
                            <div class="invalid-feedback @if ($errors->has('password')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="password_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="email_verified_at" class="col-md-2 col-form-label">Email Verified At:</label>
                        <div class="col-md-10">
                            <div class="input-group" id="dateTimePicker_email_verified_at" data-target-input="nearest">
                                <input type="text" autocomplete="off" style="max-width: 170px;border-right: unset;"
                                       data-date_time_format="{{config('admiko_config.form_date_time_format')}}"
                                       class="form-control datetimepicker-input dateTimePicker"
                                       data-target="#dateTimePicker_email_verified_at"  id="email_verified_at" data-toggle="datetimepicker"
                                       placeholder="Email Verified At" name="email_verified_at" value="{{{ old('email_verified_at', isset($data)?$data->email_verified_at : '') }}}">
                                <div class="input-group-append input-group-text" data-target="#dateTimePicker_email_verified_at" data-toggle="datetimepicker">
                                    <i class="fas fa-calendar-alt fa-fw"></i>
                                </div>
                            </div>
                            <div class="invalid-feedback @if ($errors->has('email_verified_at')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="email_verified_at_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="phone_number" class="col-md-2 col-form-label">Phone Number:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="Phone Number"  value="{{{ old('phone_number', isset($data)?$data->phone_number : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('phone_number')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="phone_number_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label">Address:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="address" name="address"  placeholder="Address"  value="{{{ old('address', isset($data)?$data->address : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('address')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="address_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer form-actions" id="form-group-buttons">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary float-start me-1 mb-1 mb-sm-0 save-button">{{trans('admiko.table_save')}}</button>
                    <a href="{{ route("admin.user.index") }}" class="btn btn-secondary float-end" role="button">{{trans('admiko.table_cancel')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection