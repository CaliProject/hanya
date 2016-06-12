@extends('layouts.admin')

@section('admin.title','课程通知-通知详情')

@section('breadcrumb')
    <li><a href="{{ url('manage/course') }}">课程通知</a></li>
    <li class="active"><span>通知详情</span></li>
@stop

@section('admin.content')
    <article class="Article">
        <div class="Article__title">
            {{ $course->title }}
        </div>
        <div class="Article__meta">
            <div author><i class="fa fa-user"></i>&nbsp;作者: {{ $course->author }}</div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-cloud"></i>&nbsp;来源: {{ $course->source }}
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>&nbsp;发布于: {{ $course->created_at->diffForHumans() }}
                    </li>
                    <li>
                        <i class="fa fa-eye"></i>&nbsp;阅读: {{ $course->count }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="Article__body">
            {!! $course->body !!}
        </div>
    </article>
@stop