@extends('layouts.admin')

@section('admin.title','香道文化-文章详情')

@section('breadcrumb')
    <li><a href="{{ url('manage/culture') }}">香道文化</a></li>
    <li class="active"><span>文章详情</span></li>
@stop

@section('admin.content')
    <article class="Article">
        <div class="Article__title">
            {{ $culture->title }}
        </div>
        <div class="Article__meta">
            <div author><i class="fa fa-user"></i>&nbsp;作者: {{ $culture->author }}</div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-cloud"></i>&nbsp;来源: {{ $culture->source }}
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>&nbsp;发布于: {{ $culture->created_at->diffForHumans() }}
                    </li>
                    <li>
                        <i class="fa fa-eye"></i>&nbsp;浏览量: {{ $culture->count }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="Article__body">
            {!! $culture->body !!}
        </div>
    </article>
@stop