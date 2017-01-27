<div class="nav-tabs-navigation" data-background-color="purple">
    <div class="nav-tabs-wrapper">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="{{Request::is('admin/tnpsettings/options')? 'active' : '' }}">
                <a href="{{route('admin.tnpsettings')}}">
                    <i class="ti-home"></i> Home
                </a>
            </li>
            <li class="{{Request::is('admin/tnpuser') || Request::is('admin/tnpuser/*')? 'active' : '' }}">
                   <a href="{{route('admin.tnpuser.index')}}">
                    <i class="ti-user"></i> Add TNP User
                </a>
            </li>
            <li class="{{Request::is('admin/delete/user')? 'active' : '' }}">
                <a href="{{route('admin.delete.user')}}">
                    <i class="ti-user"></i> Delete User Registration
                </a>
            </li>
            <li class="{{Request::is('admin/administrators')? 'active' : '' }}">
                <a href="{{route('admin.administrators')}}">
                    <i class="ti-crown"></i> Admins
                </a>
            </li>
            <li class="{{Request::is('admin/company') || Request::is('admin/company/*')? 'active' : '' }}">
                <a href="{{route('admin.company.index')}}">
                    <i class="ti-crown"></i> Company
                </a>
            </li>
            <li class="{{Request::is('admin/import')? 'active' : '' }}">
                <a href="{{route('admin.import')}}">
                    <i class="ti-import"></i> Import Mode
                </a>
            </li>
            <li class="{{Request::is('admin/standalone')? 'active' : '' }}">
                <a href="{{route('admin.standalone')}}">
                    <i class="ti-bolt"></i> Standalone Mode
                </a>
            </li>
            <li class="{{Request::is('admin/guideline') || Request::is('admin/guideline/*') ? 'active' : '' }}">    
                <a href="{{route('admin.guideline.index')}}">
                    <i class="ti-pencil-alt"></i> Guidelines
                </a>
            </li>
    </ul>
</div>
</div>