@extends('layouts.admin')

@section('admin.title','关于汉雅')

@section('breadcrumb')
    <li class="active"><span>关于汉雅</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! $about->body !!}
                    <a href="{{ $about->editLink() }}" class="btn btn-info btn-block"><i class="fa fa-pencil"></i>编辑</a>
                </div>
            </div>
        </div>
    </div>
@stop