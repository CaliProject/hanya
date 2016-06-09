@extends('layouts.admin')

@section('admin.title','汉雅主页')

@section('breadcrumb')
    <li class="active"><span>汉雅主页</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">主页图片</div>
                </div>
                <div class="panel-body">
                    <img src="{{ $image }}" alt="主页图片" class="img-thumbnail">
                    <form action="{{ url('manage/home/image') }}" method="post" class="Form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label class="control-label">更改图片:</label>
                            <div class="dropzone" id="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
                <div class="panel-heading">
                    <div class="panel-title">主页视频</div>
                </div>
                <div class="panel-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="{{ $link }}" frameborder="0" class="embed-responsive-item"></iframe>
                    </div>
                    <form action="{{ url('manage/home/link') }}" method="post" class="Form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('link') ? 'has-error' : '' }}">
                            <label for="link" class="control-label">更改视频链接:</label>
                            <input type="text" class="form-control important" id="link" name="link" value="{{ old('link') ?: $link }}">
                            @if($errors->has('link'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@include('admin.home.partials.scripts')