@extends('layouts.admin')

@section('admin.title','修改密码')

@section('breadcrumb')
    <li class="active"><span>修改密码</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('manage/password/'.Auth::user()->id) }}" method="post" class="Form editor">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group{{ $errors->has('old_password') ? 'has-error' : '' }}">
                    <label for="old_password" class="control-label">原密码:</label>
                    <input type="password" class="form-control important" id="old_password" name="old_password" value="{{ old('old_password') }}">
                    @if($errors->has('old_password'))
                        <div class="help-block">
                            <strong>{{ $errors->first('old_password') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password" class="control-label">新密码:</label>
                    <input type="password" class="form-control important" id="password" name="password" value="{{ old('password') }}">
                    @if($errors->has('password'))
                        <div class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <label for="password_confirmation" class="control-label">确认新的密码:</label>
                    <input type="password" class="form-control important" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    @if($errors->has('password_confirmation'))
                        <div class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="confirm-button">确认修改</button>
                </div>
            </form>
        </div>
    </div>
@stop