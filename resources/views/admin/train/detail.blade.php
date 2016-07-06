@extends('layouts.admin')

@section('admin.title','培训动态-动态详情')

@section('breadcrumb')
    <li><a href="{{ url('manage/train') }}">培训动态</a></li>
    <li class="active"><span>动态详情</span></li>
@stop

@section('admin.content')
    <article class="Article">
        <div class="Article__title">
            {{ $train->title }}
        </div>
        <div class="Article__meta">
            <div author>
                <i class="fa fa-user"></i>&nbsp;作者: {{ $train->author }}
            </div>
            <div stat>
                <ul>
                    <li>
                        <i class="fa fa-cloud"></i>&nbsp;来源: {{ $train->source }}
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>&nbsp;发布于: {{ $train->created_at->diffForHumans() }}
                    </li>
                    <li>
                        <i class="fa fa-eye"></i>&nbsp;浏览量: {{ $train->count }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="Article__body">
            {!! $train->body !!}
        </div>
    </article>
@stop