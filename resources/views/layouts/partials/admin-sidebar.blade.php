<aside class="Sidebar">
    <ul class="sidebar-links">
        <li>
            <a href="{{ url('manage') }}" class="{{ request()->is('manage') ? 'selected' : '' }}"><i class="fa fa-dashboard icon-btn"></i>&nbsp;首页</a>
        </li>
        <li>
            <a href="{{ url('manage/news') }}" class="{{ request()->is('manage/news*') ? 'selected' : '' }}"><i class="fa fa-news icon-btn"></i>&nbsp;新闻管理</a>
        </li>
    </ul>
</aside>