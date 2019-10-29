<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span
                    class="app-menu__label">Student List</span><i class="treeview-indicator fa
                    fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('student-index') }}"><i class="icon fa
            fa-circle-o"></i>All Student List</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span
                    class="app-menu__label">School List</span><i class="treeview-indicator fa
                    fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('school.index') }}"><i class="icon fa
            fa-circle-o"></i>All School List</a></li>
        </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Company Settings</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('company.edit', 1) }}"><i class="icon fa fa-circle-o"></i>
                    Company Info</a>
            </li>
        </ul>
    </li>



{{--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">--}}
{{--            <i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Profile Settings</span><i--}}
{{--                    class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li>--}}
{{--                <a class="treeview-item" href="{{ route('my-account') }}"><i class="icon fa fa-circle-o"></i>--}}
{{--                   Password Change</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="treeview-item" href="{{ route('profile-update') }}"><i class="icon fa fa-circle-o"></i>--}}
{{--                    Update Profile</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}



</ul>
