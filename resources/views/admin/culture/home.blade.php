@extends('layouts.admin')

@section('admin.title','香道文化')

@section('breadcrumb')
    <li class="active"><span>香道文化</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <blockquote>
                <b>文章总数: {{ $count }}</b>
                <a href="{{ url('manager/culture/add') }}" class="btn btn-info pull-right"><i class="fa fa-plus"></i>发布文章</a>
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
                @foreach($cultures as $culture)
                    <tr>
                        <td><i class="fa fa-envira"></i></td>
                        <td>{{ str_limit($culture->title,20) }}</td>
                        <td>{{ $culture->author }}</td>
                        <td>{{ $culture->created_at }}</td>
                        <td>
                            <a href="{{ $culture->editLink() }}"><i class="fa fa-pencil fa-2x"></i></a>
                            <a href="javascript:;"><i class="fa fa-close fa-2x"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@push('header')
<script>
    var CONTENT = "{!! addslashes($post->content) !!}";
</script>
@endpush