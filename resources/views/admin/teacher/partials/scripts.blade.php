@push('scripts.footer')
<script>
    $(function () {

        @if( isset($teacher->body) || old('body'))
        setTimeout(function () {
            $(".summernote").summernote('code', '{!! empty($teacher->body) ? addslashes(old('body')) : $teacher->body  !!}');
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
        $("#dropzone").dropzone({
            url: "{{ url('upload') }}",
            paramName: "image",
            maxFilesize: 3,
            maxFiles: 1,
            acceptedFiles: "image/*",
            dictDefaultMessage: '拖拽或者点击上传图片',
            init: function () {
                this.on("success",function (file) {
                    if(file.status == 'success') {
                        var json = eval('('+file.xhr.response+')');
                        $("<input type='hidden' name='image' value='" + json.url + "'>").appendTo($("#dropzone"));
                    } else {
                        swal('错误！','上传失败！','warning');
                    }
                });
            }
        });
//        Dropzone.options.myDropzone = {
//            paramName: "image",
//            maxFilesize: 2,
//            dictDefaultMessage: '拖拽或者点击上传图片'
//        }
    })
</script>
@endpush