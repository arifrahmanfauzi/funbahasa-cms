@extends("admin.layouts.default")
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{ route("admin.event.index") }}">Event</a></li>
    @if(isset($data))
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_edit')}}</li>
    @else
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_add')}}</li>
    @endIf
@endsection
@section('pageTitle')
<h1>Event</h1>
@endsection
@section('pageInfo')
@endsection
@section('backBtn')
<a href="{{ route("admin.event.index") }}"><i class="fas fa-angle-left"></i> {{trans('admiko.page_back_btn')}}</a>
@endsection
@section('content')
<div class="card formPage event_manage admikoForm">
    <legend class="action">{{ isset($data) ? trans('admiko.update') : trans('admiko.add_new') }}</legend>
    <form method="POST" action="{{ $admiko_data['formAction'] }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @if(isset($data)) @method('PUT') @endIf
        @csrf
        <div class="card-body">
            @if ($errors->any())<div class="row"><div class="col-2"></div><div class="col"><div class="invalid-feedback d-block">@foreach($errors->all() as $error) {{$error}}<br> @endforeach</div></div></div>@endif
            <div class="row">
                
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="event_name" class="col-md-2 col-form-label">Event Name:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="event_name" name="event_name"  placeholder="Event Name"  value="{{{ old('event_name', isset($data)?$data->event_name : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('event_name')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="event_name_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label">Description:</label>
                        <div class="col-md-10">
                            <textarea class="form-control form-control-textarea simple_text_editor" id="description" name="description"  placeholder="Description">{{{ old('description', isset($data)?$data->description : '') }}}</textarea>
                            <div class="invalid-feedback @if ($errors->has('description')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="description_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="poster_image" class="col-md-2 col-form-label">Poster Image:</label>
                        <div class="col-md-10">
                            @if (isset($data->poster_image) && Storage::disk(config("admiko_config.filesystem"))->exists($admiko_data['fileInfo']["poster_image"]['original']["folder"].$data->poster_image))
                            <a href="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["poster_image"]['original']["folder"].$data->poster_image) }}" target="_blank" class="tableImage">
                                    <img src="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["poster_image"]['original']["folder"].$data->poster_image) }}">
                                </a><br>
                                <div class="form-check form-checkbox">
                                <input class="form-check-input" type="checkbox" name="poster_image_admiko_delete" id="poster_image_admiko_delete" value="1">
                                <label class="form-check-label" for="poster_image_admiko_delete"> {{trans('admiko.remove_file')}}</label>
                            </div>
                            @endif
                            <input type="file" class="imageUpload mt-1" id="poster_image" accept=".jpg,.png,.jpeg" data-type=".jpg,.png,.jpeg"  name="poster_image"  data-selected="{{trans('admiko.selected_image_preview')}}" >
                            <input type="hidden" id="poster_image_admiko_current" name="poster_image_admiko_current" value="{{$data->poster_image??''}}">
                            <div class="invalid-feedback @if ($errors->has('poster_image')) d-block @endif" data-required="{{trans('admiko.required_image')}}" data-size="{{trans('admiko.required_size')}}" data-type="{{trans('admiko.required_type')}}">
                                @if ($errors->has('poster_image')){{ $errors->first('poster_image') }}@endif
                            </div>
                            <small id="poster_image_help" class="text-muted">{{trans("admiko.file_extension_limit")}}.jpg,.png,.jpeg. {{trans("admiko.recommended")}}{{trans("admiko.width")}}1920px, {{trans("admiko.height")}}1080px. {{trans("admiko.image_action")}}{{trans("admiko.image_action_resize")}}.</small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="register_link" class="col-md-2 col-form-label">Register_link:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="register_link" name="register_link"  placeholder="Register_link"  value="{{{ old('register_link', isset($data)?$data->register_link : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('register_link')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="register_link_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="poster_link" class="col-md-2 col-form-label">Poster Link:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="poster_link" name="poster_link"  placeholder="Poster Link"  value="{{{ old('poster_link', isset($data)?$data->poster_link : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('poster_link')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="poster_link_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="guide_link" class="col-md-2 col-form-label">Guide Link:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="guide_link" name="guide_link"  placeholder="Guide Link"  value="{{{ old('guide_link', isset($data)?$data->guide_link : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('guide_link')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="guide_link_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="upload_link" class="col-md-2 col-form-label">Upload Link:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="upload_link" name="upload_link"  placeholder="Upload Link"  value="{{{ old('upload_link', isset($data)?$data->upload_link : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('upload_link')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="upload_link_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="annouchement_link" class="col-md-2 col-form-label">Annouchement Link:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="annouchement_link" name="annouchement_link"  placeholder="Annouchement Link"  value="{{{ old('annouchement_link', isset($data)?$data->annouchement_link : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('annouchement_link')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="annouchement_link_help" class="text-muted"></small>
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
                    <div class="form-group row multiSelect">
                        <label for="tag" class="col-md-2 col-form-label">Tag:</label>
                        <div class="col-md-10" style="position: relative">
                            <select class="form-select" id="tag" name="tag"  data-placeholder="{{trans('admiko.select')}}" style="width: 100%" data-width="100%" data-allow-clear="true">
                                <option value="">{{trans("admiko.select")}}</option>
                                @foreach($tags_all as $id => $value)
                                    <option value="{{ $id }}" {{ (old('tag') ? old('tag') : $data->tag ?? '') == $id ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback @if ($errors->has('tag')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="tag_help" class="text-muted"></small>
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
                    <a href="{{ route("admin.event.index") }}" class="btn btn-secondary float-end" role="button">{{trans('admiko.table_cancel')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection