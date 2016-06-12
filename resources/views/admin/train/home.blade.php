@extends('layouts.admin')

@section('admin.title','培训动态')

@section('breadcrumb')
    <li class="active"><span>培训动态</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <blockquote>
                <b>动态总数: <span id="count">{{ $count }}</span></b>
                <a href="{{ url('manage/train/add') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>发布动态</a>
            </blockquote>
            <table class="table table-hover Table">
                <thead>
                <th></th>
                <th>标题</th>
                <th>作者</th>
                <th>发布时间</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($trains as $train)
                    <tr data-id="{{ $train->id }}">
                        <td><i class="fa fa-bar-chart"></i></td>
                        <td><a href="{{ $train->detailLink() }}">{{ str_limit($train->title,20) }}</a></td>
                        <td>{{ $train->author }}</td>
                        <td>{{ $train->created_at }}</td>
                        <td>
                            <a href="{{ $train->editLink() }}"><i class="fa fa-pencil fa-2x"></i></a>
                            <a href="javascript:;" data-id="{{ $train->id }}" onclick="Delete($(this))"><i class="fa fa-close fa-2x"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-home">
                {!! $trains->render() !!}
            </div>
        </div>
    </div>
@stop

@include('admin.delete-script',['url' => 'train'])