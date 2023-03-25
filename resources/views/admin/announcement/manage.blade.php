@extends("admin.layouts.default")
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{ route("admin.announcement.index") }}">Announcement</a></li>
    @if(isset($data))
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_edit')}}</li>
    @else
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_add')}}</li>
    @endIf
@endsection
@section('pageTitle')
<h1>Announcement</h1>
@endsection
@section('pageInfo')
@endsection
@section('backBtn')
<a href="{{ route("admin.announcement.index") }}"><i class="fas fa-angle-left"></i> {{trans('admiko.page_back_btn')}}</a>
@endsection
@section('content')
<div class="card formPage announcement_manage admikoForm">
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
                        <label for="start_date" class="col-md-2 col-form-label">Start Date:</label>
                        <div class="col-md-10">
                            <div class="input-group" id="dateTimePicker_start_date" data-target-input="nearest">
                                <input type="text" autocomplete="off" style="max-width: 170px;border-right: unset;"
                                       data-date_time_format="{{config('admiko_config.form_date_time_format')}}"
                                       class="form-control datetimepicker-input dateTimePicker"
                                       data-target="#dateTimePicker_start_date"  id="start_date" data-toggle="datetimepicker"
                                       placeholder="Start Date" name="start_date" value="{{{ old('start_date', isset($data)?$data->start_date : '') }}}">
                                <div class="input-group-append input-group-text" data-target="#dateTimePicker_start_date" data-toggle="datetimepicker">
                                    <i class="fas fa-calendar-alt fa-fw"></i>
                                </div>
                            </div>
                            <div class="invalid-feedback @if ($errors->has('start_date')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="start_date_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="end_date" class="col-md-2 col-form-label">End Date:</label>
                        <div class="col-md-10">
                            <div class="input-group" id="dateTimePicker_end_date" data-target-input="nearest">
                                <input type="text" autocomplete="off" style="max-width: 170px;border-right: unset;"
                                       data-date_time_format="{{config('admiko_config.form_date_time_format')}}"
                                       class="form-control datetimepicker-input dateTimePicker"
                                       data-target="#dateTimePicker_end_date"  id="end_date" data-toggle="datetimepicker"
                                       placeholder="End Date" name="end_date" value="{{{ old('end_date', isset($data)?$data->end_date : '') }}}">
                                <div class="input-group-append input-group-text" data-target="#dateTimePicker_end_date" data-toggle="datetimepicker">
                                    <i class="fas fa-calendar-alt fa-fw"></i>
                                </div>
                            </div>
                            <div class="invalid-feedback @if ($errors->has('end_date')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="end_date_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="poster" class="col-md-2 col-form-label">Poster:</label>
                        <div class="col-md-10">
                            @if (isset($data->poster) && Storage::disk(config("admiko_config.filesystem"))->exists($admiko_data['fileInfo']["poster"]['original']["folder"].$data->poster))
                            <a href="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["poster"]['original']["folder"].$data->poster) }}" target="_blank" class="tableImage">
                                    <img src="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["poster"]['original']["folder"].$data->poster) }}">
                                </a><br>
                                <div class="form-check form-checkbox">
                                <input class="form-check-input" type="checkbox" name="poster_admiko_delete" id="poster_admiko_delete" value="1">
                                <label class="form-check-label" for="poster_admiko_delete"> {{trans('admiko.remove_file')}}</label>
                            </div>
                            @endif
                            <input type="file" class="imageUpload mt-1" id="poster" accept=".jpg,.png,.jpeg" data-type=".jpg,.png,.jpeg"  name="poster"  data-selected="{{trans('admiko.selected_image_preview')}}" >
                            <input type="hidden" id="poster_admiko_current" name="poster_admiko_current" value="{{$data->poster??''}}">
                            <div class="invalid-feedback @if ($errors->has('poster')) d-block @endif" data-required="{{trans('admiko.required_image')}}" data-size="{{trans('admiko.required_size')}}" data-type="{{trans('admiko.required_type')}}">
                                @if ($errors->has('poster')){{ $errors->first('poster') }}@endif
                            </div>
                            <small id="poster_help" class="text-muted">{{trans("admiko.file_extension_limit")}}.jpg,.png,.jpeg. {{trans("admiko.recommended")}}{{trans("admiko.width")}}1920px, {{trans("admiko.height")}}1080px. {{trans("admiko.image_action")}}{{trans("admiko.image_action_resize")}}.</small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="file_participant" class="col-md-2 col-form-label">File Participant:</label>
                        <div class="col-md-10">
                            @if (isset($data->file_participant) && Storage::disk(config("admiko_config.filesystem"))->exists($admiko_data['fileInfo']["file_participant"]['original']["folder"].$data->file_participant))
                            <a href="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["file_participant"]['original']["folder"].$data->file_participant)}}" target="_blank">{{$data->file_participant}}</a><br>
                                <div class="form-check form-checkbox">
                                <input class="form-check-input" type="checkbox" name="file_participant_admiko_delete" id="file_participant_admiko_delete" value="1">
                                <label class="form-check-label" for="file_participant_admiko_delete"> {{trans('admiko.remove_file')}}</label>
                            </div>
                            @endif
                            <input type="file" class="fileUpload mt-1" id="file_participant"  name="file_participant" >
                            <input type="hidden" id="file_participant_admiko_current" name="file_participant_admiko_current" value="{{$data->file_participant??''}}">
                            <div class="invalid-feedback @if ($errors->has('file_participant')) d-block @endif" data-required="{{trans('admiko.required_text')}}" data-size="{{trans('admiko.required_size')}}" data-type="{{trans('admiko.required_type')}}">
                                @if ($errors->has('file_participant')){{ $errors->first('file_participant') }}@endif
                            </div>
                            <small id="file_participant_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="content" class="col-md-2 col-form-label">Content:</label>
                        <div class="col-md-10">
                            <textarea class="form-control form-control-textarea simple_text_editor" id="content" name="content"  placeholder="Content">{{{ old('content', isset($data)?$data->content : '') }}}</textarea>
                            <div class="invalid-feedback @if ($errors->has('content')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="content_help" class="text-muted"></small>
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
                    <a href="{{ route("admin.announcement.index") }}" class="btn btn-secondary float-end" role="button">{{trans('admiko.table_cancel')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection