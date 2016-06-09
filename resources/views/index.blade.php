@extends('layouts.app')

@section('title', '主页')

@section('base.content')
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel--hanya">
                <div class="panel-heading">
                    <h4 class="panel-title">香道文化</h4>
                    {{-- TODO: 查看更多页面 --}}
                    <a class="more" href="#"></a>
                </div>
                <div class="panel-body">
                    <ul class="List List--bullet">
                        {{-- TODO: 香道文化填充 --}}
                        @for($i = 0; $i < 6; $i++)
                            <li>
                                <a href="#">{{ str_limit('香道文化' . str_random(), 20) }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">课程通知</h4>
                        {{-- TODO: 查看更多页面 --}}
                        <a class="more" href="#"></a>
                    </div>
                    <div class="panel-body">
                        <ul class="List List--big">
                            {{-- TODO: 课程通知填充 --}}
                            @for($i = 0; $i < 10; $i++)
                                <li>
                                    <a href="#">
                                        {{ str_limit('课程通知' . str_random(30), 35) }}
                                        <time datetime="{{ \Carbon\Carbon::now() }}">{{ \Carbon\Carbon::now()->diffForHumans() }}</time>
                                    </a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">培训动态</h4>
                        {{-- TODO: 查看更多页面 --}}
                        <a class="more" href="#"></a>
                    </div>
                    <div class="panel-body">
                        <ul class="List List--big List--filled">
                            {{-- TODO: 培训动态填充 --}}
                            @for($i = 0; $i < 8; $i++)
                                <li>
                                    <a href="#">{{ str_limit('培训动态' . str_random(45), 50) }}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">师资力量</h4>
                        {{-- TODO: 查看更多页面 --}}
                        <a class="more" href="#"></a>
                    </div>
                    <div class="panel-body">
                        {{-- TODO: 师资力量填充, background-image与名字 --}}
                        @for($i = 0; $i < 3; $i++)
                            <a href="#" class="Teacher col-md-4">
                                <div class="Teacher__avatar" style="background-image: url('{{ url('logo.png') }}')"></div>
                                <span class="Teacher__name">老师 {{ $i + 1 }}</span>
                            </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Video Video--full">
                {{-- TODO: 更改视频src中embed/后的唯一id --}}
                <iframe src="http://player.youku.com/embed/XMTU5NDczOTMzMg==" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@stop