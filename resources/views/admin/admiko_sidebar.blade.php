{{--IMPORTANT: this page will be overwritten and any change will be lost!! Use custom_sidebar_bottom.blade.php and custom_sidebar_top.blade.php--}}

@if(Gate::any(['event_allow', 'event_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "event" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.event.index')}}"><i class="fas fa-file-alt fa-fw"></i>Event</a></li>
@endIf
@if(Gate::any(['announcement_allow', 'announcement_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "announcement" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.announcement.index')}}"><i class="fas fa-file-alt fa-fw"></i>Announcement</a></li>
@endIf
@if(Gate::any(['karya_allow', 'karya_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "karya" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.karya.index')}}"><i class="fas fa-file-alt fa-fw"></i>Karya</a></li>
@endIf
@if(Gate::any(['category_allow', 'category_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "category" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.category.index')}}"><i class="fas fa-file-alt fa-fw"></i>Category</a></li>
@endIf
@if(Gate::any(['tags_allow', 'tags_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "tags" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.tags.index')}}"><i class="fas fa-file-alt fa-fw"></i>Tags</a></li>
@endIf
@if(Gate::any(['user_allow', 'user_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "user" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.user.index')}}"><i class="fas fa-file-alt fa-fw"></i>User</a></li>
@endIf