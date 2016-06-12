<aside class="Sidebar">
    <ul class="sidebar-links">
        <li><a href="{{ url('manage') }}" class="{{ request()->is('manage') ? 'selected' : '' }}"><i class="fa fa-dashboard icon-btn"></i>&nbsp;首页</a></li>
        <li><a href="{{ url('manage/home') }}" class="{{ request()->is('manage/home*') ? 'selected' : '' }}"><i class="fa fa-home icon-btn"></i>&nbsp;汉雅主页</a></li>
        <li><a href="{{ url('manage/culture') }}" class="{{ request()->is('manage/culture*') ? 'selected' : '' }}"><i class="fa fa-envira icon-btn"></i>&nbsp;香道文化</a></li>
        <li><a href="{{ url('manage/course') }}" class="{{ request()->is('manage/course*') ? 'selected' : '' }}"><i class="fa fa-wpforms icon-btn"></i>&nbsp;课程通知</a></li>
        <li><a href="{{ url('manage/teacher') }}" class="{{ request()->is('manage/teacher*') ? 'selected' : '' }}"><i class="fa fa-users icon-btn"></i>&nbsp;师资力量</a></li>
        <li><a href="{{ url('manage/train') }}" class="{{ request()->is('manage/train*') ? 'selected' : '' }}"><i class="fa fa-bar-chart icon-btn"></i>&nbsp;培训动态</a></li>
        <li><a href="{{ url('manage/about') }}" class="{{ request()->is('manage/about*') ? 'selected' : '' }}"><i class="fa fa-hand-o-right icon-btn"></i>&nbsp;关于汉雅</a></li>
        <li><a href="{{ url('manage/job') }}" class="{{ request()->is('manage/job*') ? 'selected' : '' }}"><i class="fa fa-archive icon-btn"></i>&nbsp;招贤纳士</a></li>
        <li><a href="{{ url('manage/link') }}" class="{{ request()->is('manage/link*') ? 'selected' : '' }}"><i class="fa fa-link icon-btn"></i>&nbsp;友情链接</a></li>
        <li><a href="{{ url('manage/password') }}" class="{{ request()->is('manage/password*') ? 'selected' : '' }}"><i class="fa fa-edit icon-btn"></i>&nbsp;修改密码</a></li>
    </ul>
</aside>