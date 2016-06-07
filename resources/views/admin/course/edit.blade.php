@extends('layouts.admin')

@section('admin.title','课程通知-编辑通知')

@section('breadcrumb')
    <li><a href="{{ url('manage/course') }}">课程通知</a></li>
    <li class="active"><span>编辑通知</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.course.partials.form',[
                'method' => 'PATCH',
                'button' => '确认修改'
            ])
        </div>
    </div>
@stop

@include('admin.course.partials.scripts')