<div class="nav-tabs-navigation" data-background-color="orange">
    <div class="nav-tabs-wrapper">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="{{Request::is('admin/settings/options-general')? 'active' : '' }}">
            <a href="{{route('admin.settings')}}"><i class="ti-home"></i> Home</a>
        </li>

        <li class="{{Request::is('admin/alumni') || Request::is('admin/alumni/*')? 'active' : '' }}">
        	<a href="{{route('admin.alumni.index')}}"><i class="ti-user"></i> Alumni Section</a>
        </li>

        <li class="{{Request::is('admin/mainnotices') || Request::is('admin/mainnotices/*') ? 'active' : '' }}">
            <a href="{{route('admin.mainnotices.index')}}"><i class="ti-user"></i> Main Notices</a>
        </li>
        <li class="{{Request::is('admin/mainevents') || Request::is('admin/mainevents/*') ? 'active' : '' }}">
            <a href="{{route('admin.mainevents.index')}}"><i class="ti-crown"></i> Main Events</a>
        </li>
        <li class="{{Request::is('admin/branches') || Request::is('admin/branches/*') ? 'active' : '' }}">
            <a href="{{route('admin.branches.index')}}"><i class="ti-crown"></i> Branches</a>
        </li>
        <li class="{{Request::is('admin/officer') || Request::is('admin/officer/*') ? 'active' : '' }}">
            <a href="{{route('admin.officer.index')}}"><i class="ti-crown"></i> Officers</a>
        </li>
    </ul>
    </div>
</div>