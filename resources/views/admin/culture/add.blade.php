@extends('layouts.admin')

@section('admin.title','香道文化-发布文章')

@section('breadcrumb')
    <li><a href="{{ url('manager/culture') }}">香道文化</a></li>
    <li class="active"><span>发布文章</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.culture.partials.form',[
                'method' => 'POST',
                'button' => '确认发布'
            ])
        </div>
    </div>
@stop