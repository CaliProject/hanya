@extends('layouts.admin')

@section('admin.title','友情链接')

@section('breadcrumb')
    <li class="active"><span>友情链接</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <blockquote>
                <b>链接总数: <span>{{ $count }}</span></b>
                <a href="{{ url('manage/link/add') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>添加链接</a>
            </blockquote>
            <table class="table table-hover Table">
                <thead>
                <th></th>
                <th>链接名称</th>
                <th>链接网址</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($links as $id => $link)
                    @if($id)
                        <tr data-id="{{ $id }}">
                            <td><i class="fa fa-link"></i></td>
                            <td>{{ $link->name }}</td>
                            <td><a href="{{ $link->link }}">{{ str_limit($link->link,30) }}</a></td>
                            <td class="pull-right">
                                <a href="{{ url('manage/link/edit/'.$id) }}"><i class="fa fa-pencil fa-2x"></i></a>
                                <a href="javascript:;" data-id="{{ $id }}" onclick="Delete($(this))"><i class="fa fa-close fa-2x"></i></a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@include('admin.delete-script',['url' => 'link'])