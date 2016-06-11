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
                    <h4 class="panel-title">主页图片</h4>
                </div>
                <div class="panel-body">
                    <img src="{{ url($image) }}" alt="主页图片" class="img-thumbnail">
                    <form action="{{ url('manage/home/image') }}" method="post" class="Form editor" >
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label class="control-label">更改图片:</label>
                            <div class="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">主页视频</h4>
                </div>
                <div class="panel-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="http://player.youku.com/embed/{{ $link }}==" frameborder="0" class="embed-responsive-item"></iframe>
                    </div>
                    <form action="{{ url('manage/home/link') }}" method="post" class="Form editor">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('link') ? 'has-error' : '' }}">
                            <label for="link" class="control-label">更改视频链接:</label>
                            <input type="text" class="form-control important" id="link" name="link" value="{{ old('link')  }}">
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">微博网址</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('manage/home/weibo') }}" method="post" class="Form editor">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('weibo') ? 'has-error' : '' }}">
                            <input type="text" class="form-control important" id="weibo" name="weibo" value="{{ old('weibo') ?: $weibo }}">
                            @if($errors->has('weibo'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('weibo') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">qq号码</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('manage/home/qq') }}" method="post" class="Form editor">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('qq') ? 'has-error' : '' }}">
                            <input type="text" class="form-control important" id="qq" name="qq" value="{{ old('qq') ?: $qq }}">
                            @if($errors->has('qq'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('qq') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">微信公众号</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('manage/home/wechat') }}" method="post" class="Form editor">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('wechat') ? 'has-error' : '' }}">
                            <label for="wechat" class="control-label">微信公众账号:</label>
                            <input type="text" class="form-control important" id="wechat" name="wechat" value="{{ old('wechat') ?: $wechat->name }}">
                            @if($errors->has('wechat'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('wechat') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">微信公众号二维码:</label>
                            <br>
                            <img src="{{ $wechat->image }}" alt="{{ $wechat->name }}" class="img-thumbnail">
                            <br>
                            <label class="control-label">更改二维码:</label>
                            <div class="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">底部联系信息</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ url('manage/home/footer') }}" method="post" class="Form editor">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('copyright') ? 'has-error' : '' }}">
                            <label for="copyright" class="control-label" required>版权所有:</label>
                            <input type="text" class="form-control important" id="copyright" name="copyright" value="{{ old('copyright') ?: $footer_about->copyright }}">
                            @if($errors->has('copyright'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('copyright') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('telephone') ? 'has-error' : '' }}">
                            <label for="telephone" class="control-label" required>联系电话:</label>
                            <input type="text" class="form-control important" id="telephone" name="telephone" value="{{ old('telephone') ?: $footer_about->telephone }}">
                            @if($errors->has('telephone'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('wechat') ? 'has-error' : '' }}">
                            <label for="wechat" class="control-label" required>微信公众平台账号:</label>
                            <input type="text" class="form-control important" id="wechat" name="wechat" value="{{ old('wechat') ?: $footer_about->wechat }}">
                            @if($errors->has('wechat'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('wechat') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('qq') ? 'has-error' : '' }}">
                            <label for="qq" class="control-label" required>QQ号码:</label>
                            <input type="text" class="form-control important" id="qq" name="qq" value="{{ old('qq') ?: $footer_about->qq }}">
                            @if($errors->has('qq'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('qq') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address" class="control-label" required>公司地址:</label>
                            <input type="text" class="form-control important" id="address" name="address" value="{{ old('address') ?: $footer_about->address }}">
                            @if($errors->has('address'))
                                <div class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
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