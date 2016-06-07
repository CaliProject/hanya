@extends('layouts.admin')

@section('admin.title','友情链接-编辑链接')

@section('breadcrumb')
    <li><a href="{{ url('manage/link') }}">友情链接</a></li>
    <li class="active"><span>编辑链接</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.link.partials.form',[
                'method' => 'PATCH',
                'button' => '确认修改'
            ])
        </div>
    </div>
@stop