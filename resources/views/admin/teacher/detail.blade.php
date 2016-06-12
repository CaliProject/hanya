@extends('layouts.admin')

@section('admin.title','师资力量-老师详情')

@section('breadcrumb')
    <li><a href="{{ url('manage/teacher') }}">师资力量</a></li>
    <li class="active"><span>老师详情</span></li>
@stop

@section('admin.content')
    <article class="Article">
        <div class="Article__title">
            {{ $teacher->name.'老师' }}
        </div>
        <div class="Article__meta">
            <ul>
                <li>
                    <i class="fa fa-clock-o"></i>&nbsp;录入时间: {{ $teacher->created_at->toDateString() }}
                </li>
                <li>
                    <i class="fa fa-eye"></i>&nbsp;点击数: {{ $teacher->count }}
                </li>
            </ul>
        </div>
        <div class="Article__body">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ $teacher->image }}" alt="{{ $teacher->name.'老师' }}" class="img-thumbnail">
            </div>
            <div class="col-md-12">
                {!! $teacher->body !!}
            </div>
        </div>
    </article>
@stop