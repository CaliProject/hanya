<form action="{{ url()->current() }}" method="post" class="Form" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($method) ? method_field($method) : '' }}
    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="name" class="control-label" required>老师姓名:</label>
        <input type="text" class="form-control important" id="name" name="name" value="{{ empty($teacher) ? old('name') : $teacher->name }}">
        @if($errors->has('name'))
            <div class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label" required>老师简介:</label>
        <input type="text" class="form-control important" id="content" name="content" value="{{ empty($content) ? old('content') : $teacher->content }}">
        @if($errors->has('content'))
            <div class="help-block">
                <strong>{{ $errors->first('content') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('is_good') ? 'has-error' : '' }}">
        <label for="is_good" class="control-label" required>名师:</label>
        <select name="is_good" id="is_good" class="form-control important">
            @if(!empty($teacher) && $teacher->is_good)
                <option value="1" selected>名师</option>
                <option value="0">老师</option>
            @else
                <option value="1">名师</option>
                <option value="0" selected>老师</option>
            @endif
        </select>
        @if($errors->has('is_good'))
            <div class="help-block">
                <strong>{{ $errors->first('is_good') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
        <label for="image" class="control-label" required>老师照片:</label>
        @if(!empty($teacher))
            <img id="teacher-image" src="{{ $teacher->image }}" alt="{{ $teacher->name }}" class="img-thumbnail">
        @endif
        <div class="dropzone" id="dropzone"></div>
        @if($errors->has('image'))
            <div class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="body" class="control-label" required>老师介绍:</label>
        <div class="summernote"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="confirm-button">{{ $button }}</button>
        <br>
        <a href="{{ url('manage/teacher') }}" class="btn btn-danger btn-block">返回</a>
    </div>
</form>