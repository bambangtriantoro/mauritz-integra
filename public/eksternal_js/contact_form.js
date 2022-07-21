$(document).ready(function(){
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    $('body').on('click', '#kirimpesan', function () {
        // var data = $('.php-email-form').serialize();
        var data = $('.php-email-form').serializeArray(),dataObj={};
        var status = true;
        
        $(data).each(function(i, field){
            dataObj[field.name] = field.value;
            if(dataObj[field.name] === '') {
                status = false;
            }
        });
        
        if(!status) {
            iziToast.warning({ //tampilkan izitoast warning
                title: 'Form harus diisi dengan lengkap!',
                position: 'bottomRight'
            });
        } else {
            $('#kirimpesan').html('Sending..');

            $.ajax({
                url: "send", //eksekusi ajax ke url ini
                type: 'POST',
                dataType : 'json',
                data: data,
                error: function(error){
                    iziToast.danger({ //tampilkan izitoast warning
                        title: 'Error '+ error,
                        position: 'bottomRight'
                    });
                },
                success: function (result) { //jika sukses
                    iziToast.success({ //tampilkan izitoast warning
                        title: 'Berhasil Mengirim Pesan, Terimakasih!',
                        position: 'bottomRight'
                    });
                    $('#kirimpesan').html('Kirim Pesan');

                    $('.php-email-form').trigger('reset');
                },
            })
        }
    });
})