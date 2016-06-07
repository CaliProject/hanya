<form action="{{ url()->current() }}" method="post" class="Form">
    {{ csrf_field() }}
    {{ isset($method) ? method_field($method) : '' }}
    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="name" class="control-label">链接名称:</label>
        <input type="text" class="form-control important" id="name" name="name" value="{{ empty($link) ? old('name') : $link->name }}">
        @if($errors->has('name'))
            <div class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('link') ? 'has-error' : '' }}">
        <label for="link" class="control-label">链接网址:</label>
        <input type="text" class="form-control important" id="link" name="link" value="{{ empty($link) ? old('link') : $link->link }}">
        @if($errors->has('link'))
            <div class="help-block">
                <strong>{{ $errors->first('link') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="confirm-button">{{ $button }}</button>
        <a href="{{ url('manage/link') }}" class="btn btn-danger btn-block">返回</a>
    </div>
</form>