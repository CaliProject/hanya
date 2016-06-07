// $(function () {
//     $(".Form:not(.editor)").on('submit', function () {
//         // ajax + form.serialize()
//     });
//
//     $(".Form.editor").on('submit', function () {
//         // 手动提取Code
//         var code = $(".summernote").code(),
//             data = $(form).serialize();
//
//         data = data + '&content=' + code;
//
//         sendRequest('', 'POST', function (success) {
//             if (success) {
//
//             }
//         }, data);
//     });
//
//     function sendRequest(url, type, callback, data) {
//
//         $.ajax({
//             success: function () {
//                 callback(true);
//             },
//             data: data,
//             error: function () {
//                 callback(false);
//             }
//         })
//     }
//
//     // 插入HTML到编辑器中
//     setTimeout(function () {
//         $(".summernote").code(CONTENT);
//     }, 500);
//
//     $(".summernote").on('image_insert', function (ev) {
//         ev.preventDefault();
//
//         sendRequest('upload/photo', 'PATCH', function (success) {
//             if (success) {
//                 $(".summernote").insert('');
//             }
//         });
//     })
// });

$(function () {
    $(".summernote").each(function () {
        $(this).summernote({
            lang: 'zh-CN',
            callbacks: {
                onImageUpload: function (files) {
                    if (files.length) {
                        $(files).each(function (){
                            var Formdata = new FormData();
                            Formdata.append('image', this);

                            $.ajax({
                                url: '/upload',
                                type: 'POST',
                                dataType: 'json',
                                data: Formdata,
                                enctype: 'multipart/form-data',
                                processData: false,
                                contentType: false,
                                success:function (data){
                                    if (data.status != 'error'){
                                        $(".summernote").summernote('insertImage', data.url);
                                    } else {
                                        toastr.error(data.message);
                                    }
                                },
                                error: function (er) {
                                    toastr.error(er.resposeText);
                                }
                            });
                        });
                    }
                }
            }
        });
    });
});