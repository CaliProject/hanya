@extends('layouts.admin')

@section('admin.title','师资力量-编辑老师')

@section('breadcrumb')
    <li><a href="{{ url('manage/teacher') }}">师资力量</a></li>
    <li class="active"><span>编辑老师</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.teacher.partials.form',[
                'method' => 'PATCH',
                'button' => '确认修改'
            ])
        </div>
    </div>
@stop

@include('admin.teacher.partials.scripts')