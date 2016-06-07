@extends('layouts.admin')

@section('admin.title','课程通知')

@section('breadcrumb')
    <li class="active"><span>课程通知</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <blockquote>
                <b>文章总数：<span id="count">{{ $count }}</span></b>
                <a href="{{ url('manage/course/add') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>发布课程</a>
            </blockquote>
        </div>
        <div class="col-md-12">
            <table class="table table-hover Table">
                <thead>
                <th></th>
                <th>标题</th>
                <th>作者</th>
                <th>发布时间</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr data-id="{{ $course->id }}">
                        <td><i class="fa fa-wpforms"></i></td>
                        <td><a href="{{ $course->detailLink() }}">{{ str_limit($course->title,20) }}</a></td>
                        <td>{{ $course->author }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>
                            <a href="{{ $course->editLink() }}"><i class="fa fa-pencil fa-2x"></i></a>&nbsp;
                            <a href="javascript:;" data-id="{{ $course->id }}" onclick="Delete($(this))"><i class="fa fa-close fa-2x"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-home">
                {!! $courses->render() !!}
            </div>
        </div>
    </div>
@stop

@include('admin.delete-script',['url' => 'course'])