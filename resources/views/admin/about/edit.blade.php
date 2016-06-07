@extends('layouts.admin')

@section('admin.title','关于汉雅-编辑我们')

@section('breadcrumb')
    <li><a href="{{ url('manage/about') }}">关于汉雅</a></li>
    <li class="active"><span>编辑我们</span></li>
@stop

@section('admin.content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ $about->editLink() }}" method="post" class="Form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="summernote"></div>
                        <div class="form-group">
                            <button type="submit" class="confirm-button">确认修改</button>
                            <a href="{{ url('manage/about') }}" class="btn btn-danger btn-block">返回</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts.footer')
<script>
    $(function () {

        @if( isset($about->body) || old('body'))
        setTimeout(function () {
            $(".summernote").summernote('code', '{!! empty($about->body) ? addslashes(old('body')) : $about->body  !!}');
        },500);
        @endif

        $("form:has(.summernote)").on('submit',function (e) {
            e.preventDefault();
            var form = e.target;

            $("<textarea name='body' class='hidden'>" + $(".summernote").summernote('code') + "</textarea>").appendTo($(form));

            var data = $(form).serialize();

            $.ajax({
                url: form.action,
                type: $(form).find('input[name=_method]') == undefined ? form.method :  $(form).find('input[name=_method]').attr('value'),
                data: data,
                dataType: 'json',
                success: function (data) {
                    if (typeof(data.redirect) == 'undefined') {
                        if (data.status == 'success') {
                            toastr.success(data.message);
                        } else {
                            toastr.error(data.message);
                        }
                        return false;
                    } else {
                        window.location.href = data.redirect;
                    }
                },
                error: function (error) {
                    if (error.status === 422) {
                        var errors = JSON.parse(error.responseText);
                        for (var er in errors) {
                            var sel = '[name=' + er +']',
                                    groupEl = $($(form).find(sel)[0]).parents('.form-group')[0];
                            // Add error class to the form-group
                            $(groupEl).addClass('has-error shaky');
                            setTimeout(function () {
                                $(groupEl).removeClass('has-error shaky')
                            }, 8000);

                            $(sel).focus();
                            toastr.error('<h4>'+errors[er][0]+'</h4>');
                        }
                    } else {
                        toastr.error(error.responseText);
                    }
                }
            })
        })
    })
</script>
@endpush