@if(Request::is('user/*') || Request::is('notice/*'))
<div class="col-md-2">
	<div class="sidebar content-box hidden-sm hidden-xs" style="display: block;">
        <ul class="nav clearfix">
            <!-- Main menu -->
            <li class="{{Request::is('user/dashboard')? "current" : ""}} ">
                <a href="/user/dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard<img src="/users/img/new-star.gif" width="30" height="30"></a>
            </li>
            <li class="{{Request::is('notice/*')? "current" : ""}}">
                <a href="/user/notices"><i class="glyphicon glyphicon-calendar"></i> All Notices</a>
            </li>
            <li class="disabled">
                <a href="#"><i class="glyphicon glyphicon-stats"></i> Statistics</a>
            </li>
            <li class="{{Request::is('user/profile')? "current" : ""}}">
                <a href="/user/profile"><i class="glyphicon glyphicon-list"></i> User Profile</a>
            </li>
            <li class="{{Request::is('user/contact')? "current" : ""}}">
                <a href="/user/contact"><i class="glyphicon glyphicon-record"></i>Contact Admin</a>
            </li>
            
    </ul>
</div>
</div>
@else
    <div class="col-md-3">
    <div class="sidebar content-box hidden-sm hidden-xs" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="{{Request::is('admin')? "current" : ""}}">
                <a href="/admin"><i class="glyphicon glyphicon-home"></i> Dashboard </a>
            </li>
            <li class="{{Request::is('admin/post')|| Request::is('admin/post/*')? "current" : ""}} ">
                <a href="/admin/post"><i class="glyphicon glyphicon-bullhorn"></i>Posts - Admin</a>
            </li>
            <li class="{{Request::is('admin/applicants')? "current" : ""}}">
                <a href="/admin/applicants"><i class="glyphicon glyphicon-list"></i> Applicants</a>
            </li>
            <li class="{{Request::is('admin/administrators')? "current" : ""}}">
                <a href="/admin/administrators"><i class="glyphicon glyphicon-tower"></i> Admins</a>
            </li>
            <li class="{{Request::is('admin/delete/user')? "current" : ""}}">
                <a href="/admin/delete/user"><i class="glyphicon glyphicon-user"></i> Delete User</a>
            </li>
            <li class="{{Request::is('admin/import')? "current" : ""}}">
                <a href="/admin/import"><i class="glyphicon glyphicon-import"></i> IMPORT</a>
            </li>
            <li class="{{Request::is('admin/standalone')? "current" : ""}}">
                <a href="/admin/standalone"><i class="glyphicon glyphicon-share"></i> Standalone Mode</a>
            </li>
            <li class="{{Request::is('admin/sendgroupemail')? "current" : ""}}">
                <a href="/admin/sendgroupemail"><i class="glyphicon glyphicon-send"></i> Send Bulk Mail</a>
            </li>
            
        </ul>
    </div>
    </div>
@endif
    