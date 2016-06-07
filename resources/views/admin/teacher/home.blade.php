@extends('layouts.admin')

@section('admin.title','师资力量')

@section('breadcrumb')
    <li class="active"><span>师资力量</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <blockquote>
                <b>文章总数: <span id="count">{{ $count }}</span></b>
                <a href="{{ url('manage/teacher/add') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>添加老师</a>
            </blockquote>
            <table class="table table-hover Table">
                <thead>
                <th></th>
                <th>姓名</th>
                <th>名师</th>
                <th>发布时间</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr data-id="{{ $teacher->id }}">
                        <td><i class="fa fa-user"></i></td>
                        <td><a href="{{ $teacher->detailLink() }}">{{ $teacher->name }}</a></td>
                        <td>
                            @if($teacher->isgood)
                                是
                            @else
                                否
                            @endif
                        </td>
                        <td>{{ $teacher->created_at }}</td>
                        <td>
                            <a href="{{ $teacher->editLink() }}"><i class="fa fa-pencil fa-2x"></i></a>
                            <a href="javascript:;" data-id="{{ $teacher->id }}" onclick="Delete($(this))"><i class="fa fa-close fa-2x"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-home">
                {!! $teachers->render() !!}
            </div>
        </div>
    </div>
@stop