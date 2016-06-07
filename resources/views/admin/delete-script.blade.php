@push('scripts.footer')
<script>
        function Delete(el){
            var id = el.attr("data-id");
            swal({
                        title: '确认删除？',
                        text: '一旦删除后无法恢复！',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: '确认删除！',
                        cancelButtonText: '点错了',
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            $.ajax({
                                url: "{{ url('manage/'.$url) }}" + "/" + id,
                                type: "DELETE",
                                data: {_token: "{{ csrf_token() }}"},
                                dataType: 'json',
                                success: function (data) {
                                    if (data.status == 'success') {
                                        swal(data.message,'','success');
                                        $('tr[data-id='+id+']').fadeOut();
                                        setTimeout(function () {
                                            $('tr[data-id='+id+']').remove();
                                        },500);
                                        $('#count').html(data.num);
                                    } else {
                                        swal(data.message,'','warning');
                                    }
                                },
                                error: function (err) {
                                    swal(err.responseText,'','warning');
                                }

                            })
                        }
                    })
        }

</script>
@endpush