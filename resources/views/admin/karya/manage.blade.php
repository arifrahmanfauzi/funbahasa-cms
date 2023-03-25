@extends("admin.layouts.default")
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{ route("admin.karya.index") }}">Karya</a></li>
    @if(isset($data))
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_edit')}}</li>
    @else
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_add')}}</li>
    @endIf
@endsection
@section('pageTitle')
<h1>Karya</h1>
@endsection
@section('pageInfo')
@endsection
@section('backBtn')
<a href="{{ route("admin.karya.index") }}"><i class="fas fa-angle-left"></i> {{trans('admiko.page_back_btn')}}</a>
@endsection
@section('content')
<div class="card formPage karya_manage admikoForm">
    <legend class="action">{{ isset($data) ? trans('admiko.update') : trans('admiko.add_new') }}</legend>
    <form method="POST" action="{{ $admiko_data['formAction'] }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @if(isset($data)) @method('PUT') @endIf
        @csrf
        <div class="card-body">
            @if ($errors->any())<div class="row"><div class="col-2"></div><div class="col"><div class="invalid-feedback d-block">@foreach($errors->all() as $error) {{$error}}<br> @endforeach</div></div></div>@endif
            <div class="row">
                
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">Title:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="title" name="title"  placeholder="Title"  value="{{{ old('title', isset($data)?$data->title : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('title')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="title_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="category" class="col-md-2 col-form-label">Category:*</label>
                        <div class="col-md-10">
                            <select class="form-select" id="category" name="category" required="true">
                                
                                @foreach($category_all as $id => $value)
                                    <option value="{{ $id }}" {{ (old('category') ? old('category') : $data->category ?? '') == $id ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback @if ($errors->has('category')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="category_help" class="text-muted">Category Script</small>
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

                <div class=" col-12">
                    <div class="form-group row">
                        <label for="excerpt" class="col-md-2 col-form-label">Excerpt:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="excerpt" name="excerpt"  placeholder="Excerpt"  value="{{{ old('excerpt', isset($data)?$data->excerpt : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('excerpt')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="excerpt_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="author" class="col-md-2 col-form-label">Author:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="author" name="author"  placeholder="Author"  value="{{{ old('author', isset($data)?$data->author : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('author')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="author_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="phone" class="col-md-2 col-form-label">Phone:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="phone" name="phone"  placeholder="Phone"  value="{{{ old('phone', isset($data)?$data->phone : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('phone')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="phone_help" class="text-muted"></small>
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
                        <label for="cover_image" class="col-md-2 col-form-label">Cover Image:</label>
                        <div class="col-md-10">
                            @if (isset($data->cover_image) && Storage::disk(config("admiko_config.filesystem"))->exists($admiko_data['fileInfo']["cover_image"]['original']["folder"].$data->cover_image))
                            <a href="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["cover_image"]['original']["folder"].$data->cover_image) }}" target="_blank" class="tableImage">
                                    <img src="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["cover_image"]['original']["folder"].$data->cover_image) }}">
                                </a><br>
                                <div class="form-check form-checkbox">
                                <input class="form-check-input" type="checkbox" name="cover_image_admiko_delete" id="cover_image_admiko_delete" value="1">
                                <label class="form-check-label" for="cover_image_admiko_delete"> {{trans('admiko.remove_file')}}</label>
                            </div>
                            @endif
                            <input type="file" class="imageUpload mt-1" id="cover_image" accept=".jpg,.png,.jpeg" data-type=".jpg,.png,.jpeg"  name="cover_image"  data-selected="{{trans('admiko.selected_image_preview')}}" >
                            <input type="hidden" id="cover_image_admiko_current" name="cover_image_admiko_current" value="{{$data->cover_image??''}}">
                            <div class="invalid-feedback @if ($errors->has('cover_image')) d-block @endif" data-required="{{trans('admiko.required_image')}}" data-size="{{trans('admiko.required_size')}}" data-type="{{trans('admiko.required_type')}}">
                                @if ($errors->has('cover_image')){{ $errors->first('cover_image') }}@endif
                            </div>
                            <small id="cover_image_help" class="text-muted">Ilustration Image{{trans("admiko.file_extension_limit")}}.jpg,.png,.jpeg. {{trans("admiko.recommended")}}{{trans("admiko.width")}}1920px, {{trans("admiko.height")}}1080px. {{trans("admiko.image_action")}}{{trans("admiko.image_action_resize")}}.</small>
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
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="file" class="col-md-2 col-form-label">File:</label>
                        <div class="col-md-10">
                            @if (isset($data->file) && Storage::disk(config("admiko_config.filesystem"))->exists($admiko_data['fileInfo']["file"]['original']["folder"].$data->file))
                            <a href="{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["file"]['original']["folder"].$data->file)}}" target="_blank">{{$data->file}}</a><br>
                                <div class="form-check form-checkbox">
                                <input class="form-check-input" type="checkbox" name="file_admiko_delete" id="file_admiko_delete" value="1">
                                <label class="form-check-label" for="file_admiko_delete"> {{trans('admiko.remove_file')}}</label>
                            </div>
                            @endif
                            <input type="file" class="fileUpload mt-1" id="file"  name="file" >
                            <input type="hidden" id="file_admiko_current" name="file_admiko_current" value="{{$data->file??''}}">
                            <div class="invalid-feedback @if ($errors->has('file')) d-block @endif" data-required="{{trans('admiko.required_text')}}" data-size="{{trans('admiko.required_size')}}" data-type="{{trans('admiko.required_type')}}">
                                @if ($errors->has('file')){{ $errors->first('file') }}@endif
                            </div>
                            <small id="file_help" class="text-muted"></small>
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
                    <a href="{{ route("admin.karya.index") }}" class="btn btn-secondary float-end" role="button">{{trans('admiko.table_cancel')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection