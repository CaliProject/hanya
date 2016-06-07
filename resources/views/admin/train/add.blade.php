@extends('layouts.admin')

@section('admin.title','培训动态-添加动态')

@section('breadcrumb')
    <li><a href="{{ url('manage/train') }}">培训动态</a></li>
    <li class="active"><span>添加动态</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.train.partials.form',[
                'method' => 'POST',
                'button' => '确认添加'
            ])
        </div>
    </div>
@stop

@include('admin.train.partials.scripts')