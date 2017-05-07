<ul class="sidebar-menu">
    <li class="active">
        <a href="/">
            <i class="fa fa-dashboard"></i> <span>@lang('main.home')</span>
        </a>
    </li>
    <li>
        <a href="{{ route('projects.index') }}">
            @lang('main.my_projects')
        </a>
    </li>
    <li>
        <a href="{{ route('tasks.index') }}">
            @lang('main.my_tasks')
        </a>
    </li>
    <li>
        <a href="nepoznataRuta.html">
            @lang('main.users')
        </a>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Charts</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
        </ul>
    </li>
</ul>