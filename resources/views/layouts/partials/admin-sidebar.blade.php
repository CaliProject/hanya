<aside class="Sidebar">
    <ul class="sidebar-links">
        <li><a href="{{ url('manager') }}" class="{{ request()->is('manager') ? 'selected' : '' }}"><i class="fa fa-dashboard icon-btn"></i>&nbsp;首页</a></li>
        <li><a href="{{ url('manager/culture') }}" class="{{ request()->is('manager/culture*') ? 'selected' : '' }}"><i class="fa fa-envira icon-btn"></i>&nbsp;香道文化</a></li>
        <li><a href="{{ url('manager/course') }}" class="{{ request()->is('manager/course*') ? 'selected' : '' }}"><i class="fa fa-wpforms icon-btn"></i>&nbsp;课程通知</a></li>
        <li><a href="{{ url('manager/teacher') }}" class="{{ request()->is('manager/teacher*') ? 'selected' : '' }}"><i class="fa fa-users icon-btn"></i>&nbsp;师资力量</a></li>
        <li><a href="{{ url('manager/train') }}" class="{{ request()->is('manager/train*') ? 'selected' : '' }}"><i class="fa fa-bar-chart icon-btn"></i>&nbsp;培训动态</a></li>
        <li><a href="{{ url('manager/about') }}" class="{{ request()->is('manager/about*') ? 'selected' : '' }}"><i class="fa fa-hand-o-right icon-btn"></i>&nbsp;关于汉雅</a></li>
        <li><a href="{{ url('manager/job') }}" class="{{ request()->is('manager/job*') ? 'selected' : '' }}"><i class="fa fa-archive icon-btn"></i>&nbsp;招贤纳士</a></li>
    </ul>
</aside>