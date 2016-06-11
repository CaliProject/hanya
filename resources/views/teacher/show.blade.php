@extends('layouts.content')

@section('title',$teacher->name.'老师')

@section('breadcrumb')
    <li><a href="{{ url('teacher') }}">师资力量</a></li>
    <li class="active">{{ $teacher->name.'老师' }}</li>
@stop

@section('right')
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
        <hr>
        <h5 style="color: red;">名师链接:</h5>
        <ul class="List List--filled">
            @foreach($teacher->good() as $teacher)
                <li>
                    <a href="{{ $teacher->showLink() }}">{{ $teacher->name }}</a>
                </li>
            @endforeach
        </ul>
    </article>
@stop