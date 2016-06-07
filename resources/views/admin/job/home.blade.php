@extends('layouts.admin')

@section('admin.title','招贤纳士')

@section('breadcrumb')
    <li class="active"><span>招贤纳士</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! $job->body !!}
                </div>
                <a href="{{ $job->editLink() }}" class="btn btn-info btn-block"><i class="fa fa-pencil"></i>编辑</a>
            </div>
        </div>
    </div>
@stop