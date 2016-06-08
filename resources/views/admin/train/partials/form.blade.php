<form action="{{ url()->current() }}" method="post" class="Form">
    {{ csrf_field() }}
    {{ isset($method) ? method_field($method) : '' }}
    <div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label">标题:</label>
        <input type="text" class="form-control important" id="title" name="title" value="{{ empty($train) ? old('title') : $train->title }}">
        @if($errors->has('title'))
            <div class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('author') ? 'has-error' : '' }}">
        <label for="author" class="control-label">作者:</label>
        <input type="text" class="form-control important" id="author" name="author" value="{{ empty($train) ? old('author') : $train->author }}">
        @if($errors->has('author'))
            <div class="help-block">
                <strong>{{ $errors->first('author') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('source') ? 'has-error' : '' }}">
        <label for="source" class="control-label">来源:</label>
        <input type="text" class="form-control important" id="source" name="source" value="{{ empty($train) ? old('source') : $train->source }}">
        @if($errors->has('source'))
            <div class="help-block">
                <strong>{{ $errors->first('source') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label">内容:</label>
        <div class="summernote"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="confirm-button">{{ $button }}</button>
        <a href="{{ url('manage/train') }}" class="btn btn-danger btn-block">返回</a>
    </div>
</form>