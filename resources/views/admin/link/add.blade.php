@extends('layouts.admin')

@section('admin.title','友情链接-添加链接')

@section('breadcrumb')
    <li><a href="{{ url('manage/link') }}">友情链接</a></li>
    <li class="active"><span>添加链接</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.link.partials.form',[
                'method' => 'POST',
                'button' => '确认添加'
            ])
        </div>
    </div>
@stop