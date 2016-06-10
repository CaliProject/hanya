@extends('layouts.app')

@section('base.content')

    <div class="container">
        <div class="Left">
            <div class="panel panel--hanya">
                <div class="panel-heading">
                    <h4 class="panel-title">导航</h4>
                </div>
                <div class="panel-body">
                    <ul class="List List--big List--fancy">
                        <li>
                            <a href="#">香道文化</a>
                        </li>
                        <li>
                            <a href="#">课程通知</a>
                        </li>
                        <li>
                            <a href="#">师资力量</a>
                        </li>
                        <li>
                            <a href="#">培训动态</a>
                        </li>
                        <li>
                            <a href="#">关于汉雅</a>
                        </li>
                        <li>
                            <a href="#">招贤纳士</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel--hanya">
                <div class="panel-heading">
                    <h4 class="panel-title">培训动态</h4>
                </div>
                <div class="panel-body">
                    <ul class="List List--filled">
                        {{-- TODO: 培训动态Collection --}}
                        @for($i = 0; $i < 8; $i++)
                            <li>
                                <a href="#">培训动态 {{ $i + 1 }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

            @yield('left')
        </div>
        <div class="Right">
            <div class="Panel">
                <ol class="Breadcrumb">
                    <li><a href="{{ url('/') }}">汉雅</a></li>
                    @yield('breadcrumb')
                </ol>

                <div class="panel-body">
                    @yield('right')
                </div>

            </div>
        </div>
    </div>

@stop