<form action="{{ url()->current() }}" method="post" class="Form">
    {!! csrf_field() !!}
    {!! isset($method) ? method_field($method) : '' !!}
    <div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label" required>标题:</label>
        <input type="text" class="form-control important" id="title" name="title" value="{{ empty($course->title) ? old('title') : $course->title }}">
        @if($errors->has('title'))
            <div class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('author') ? 'has-error' : '' }}">
        <label for="author" class="control-label" required>作者:</label>
        <input type="text" class="form-control important" id="author" name="author" value="{{ empty($course->author) ? old('author') : $course->author }}">
        @if($errors->has('author'))
            <div class="help-block">
                <strong>{{ $errors->first('author') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('source') ? 'has-error' : '' }}">
        <label for="source" class="control-label" required>来源:</label>
        <input type="text" class="form-control important" id="source" name="source" value="{{ empty($course->source) ? old('source') : $course->source }}">
        @if($errors->has('source'))
            <div class="help-block">
                <strong>{{ $errors->first('source') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label" required>内容:</label>
        <div class="summernote"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="confirm-button">{{ $button }}</button>
        <br>
        <a href="{{ url('manage/course') }}" class="btn btn-danger btn-block">返回</a>
    </div>
</form>