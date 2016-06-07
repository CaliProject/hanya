@extends('layouts.admin')

@section('admin.title','培训动态-编辑动态')

@section('breadcrumb')
    <li><a href="{{ url('manage/train') }}">培训动态</a></li>
    <li class="active"><span>编辑动态</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.train.partials.form',[
                'method' => 'PATCH',
                'button' => '确认修改'
            ])
        </div>
    </div>
@stop

@include('admin.train.partials.scripts')