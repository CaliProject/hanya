@extends('layouts.app')

@section('title', '主页')

@section('base.content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="Video Video--full">
                    <iframe src="http://player.youku.com/embed/{{ str_replace('.html', '', $link) }}==" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">课程通知</h4>
                        <a class="more" href="{{ url('course') }}"></a>
                    </div>
                    <div class="panel-body">
                        <ul class="List List--big List--filled">
                            @foreach($courses as $course)
                                <li>
                                    <a href="{{ $course->showLink() }}">
                                        {{ str_limit($course->title,20) }}
                                    </a>
                                    <time>{{ $course->created_at->toDateString() }}</time>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">香道文化</h4>
                        <a class="more" href="{{ url('culture') }}"></a>
                    </div>
                    <div class="panel-body">
                        <ul class="List List--big List--filled">
                            @foreach($cultures as $culture)
                                <li>
                                    <a href="{{ $culture->showLink() }}">
                                        {{ str_limit($culture->title,20) }}
                                    </a>
                                    <time>{{ $culture->created_at->toDateString() }}</time>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">培训动态</h4>
                        <a class="more" href="{{ url('train') }}"></a>
                    </div>
                    <div class="panel-body">
                        <ul class="List List--big List--filled">
                            @foreach($trains as $train)
                                <li>
                                    <a href="{{ $train->showLink() }}">
                                        {{ str_limit($train->title,50) }}
                                    </a>
                                    <time>{{ $train->created_at->toDateString() }}</time>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel--hanya">
                    <div class="panel-heading">
                        <h4 class="panel-title">师资力量</h4>
                        <a class="more" href="{{ url('teacher') }}"></a>
                    </div>
                    <div class="panel-body">
                        @foreach($teachers as $teacher)
                            <a href="{{ $teacher->showLink() }}" class="Teacher col-md-4">
                                <div class="Teacher__avatar" style="background-image: url('{{ $teacher->image }}')"></div>
                                <span class="Teacher__name">{{ $teacher->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop