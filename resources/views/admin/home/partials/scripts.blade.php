@push('scripts.footer')
<script>
    $(function () {
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
                        $("#teacher-image").src = json.url;
                    } else {
                        swal('错误！','上传失败！','warning');
                    }
                });
            }
        });
    })
</script>
@endpush