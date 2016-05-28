<!-- Navbar -->
<nav class="navbar navbar-fixed-top Nav">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">导航开关</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('logo.png') }}" alt="Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li{{ request()->is('/') ? ' class=on' : '' }}><a href="{{ url('/') }}">主页</a></li>
                <li{{ request()->is('...*') ? ' class=on' : '' }}><a href="{{ url('...') }}">什么鬼</a></li>
            </ul>
        </div>
    </div>
</nav>