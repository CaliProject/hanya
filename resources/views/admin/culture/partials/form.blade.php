<form action="{{ url()->current() }}" method="POST" class="Form editor">
    {!! csrf_field() !!}
    {!! isset($method) ? method_field($method) : '' !!}
    <div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label" required>文章标题:</label>
        <input type="text" class="form-control important" id="title" name="title" value="{{ empty($culture) ? old('title') : $culture->title }}">
        @if($errors->has('title'))
            <div class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('author') ? 'has-error' : '' }}">
        <label for="author" class="control-label" required>文章作者:</label>
        <input type="text" class="form-control important" id="author" name="author" value="{{ empty($culture) ? old('author') : $culture->author }}">
        @if($errors->has('author'))
            <div class="help-block">
                <strong>{{ $errors->first('author') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('source') ? 'has-error' : '' }}">
        <label for="source" class="control-label" required>来源:</label>
        <input type="text" class="form-control important" id="source" name="source" value="{{ empty($culture) ? old('source') : $culture->source }}">
        @if($errors->has('source'))
            <div class="help-block">
                <strong>{{ $errors->first('source') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label" required>文章内容:</label>
        <div class="summernote"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="confirm-button">{{ $button }}</button>
        <br>
        <a href="{{ url('manage/culture') }}" class="btn btn-danger btn-block">返回</a>
    </div>
</form>