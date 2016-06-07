@extends('layouts.admin')

@section('admin.title','香道文化-编辑文章')

@section('breadcrumb')
    <li><a href="{{ url('manage/culture') }}">香道文化</a></li>
    <li class="active"><span>编辑文章</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.culture.partials.form',[
                'method' => 'PATCH',
                'button' => '确认修改'
            ])
        </div>
    </div>
@stop

@include('admin.culture.partials.scripts')