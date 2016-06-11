@extends('layouts.content')

@section('title',$course->title)

@section('breadcrumb')
    <li><a href="{{ url('course') }}">课程通知</a></li>
    <li class="active">{{ $course->title }}</li>
@stop

@section('right')
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
        <hr>
        <h5>
            上一篇:
            <small>
                @if(!empty($course->previous()))
                    <a href="{{ $course->previous()->showLink() }}">{{ $course->previous()->title }}</a>
                @endif
            </small>
        </h5>
        <h5>
            下一篇:
            <small>
                @if(!empty($course->next()))
                    <a href="{{ $course->next()->showLink() }}">{{ $course->next()->title }}</a>
                @endif
            </small>
        </h5>
    </article>
@stop