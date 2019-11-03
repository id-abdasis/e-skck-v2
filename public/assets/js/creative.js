$(document).ready(function() {
    $('#kabupaten_satwil').attr('disabled', 'disabled')
    $('#kecamatan_satwil').attr('disabled', 'disabled')
    $('#kelurahan_satwil').attr('disabled', 'disabled')

    $('#provinsi_satwil').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_satwil').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_satwil').removeAttr('disabled')
        }
    })

    $('#kabupaten_satwil').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_satwil').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_satwil').removeAttr('disabled')
        }
    })

    $('#kecamatan_satwil').change(function() {
        if ($(this).val() == "") {
            $('#kelurahan_satwil').attr('disabled', 'disabled')
        } else {
            $('#kelurahan_satwil').removeAttr('disabled')
        }
    })

    //dinamyc provinsi
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_satwil').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis
    $('#provinsi_satwil').change(function() {
        let provinsi_id = $('#provinsi_satwil').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_satwil').html(data)
                $('#kabupaten_satwil').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis
    $('#kabupaten_satwil').change(function() {
        let kabupaten_id = $('#kabupaten_satwil').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_satwil').html(data)
                $('#kecamatan_satwil').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis
    $('#kecamatan_satwil').change(function() {
        let kecamatan_id = $('#kecamatan_satwil').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_satwil').html(data)
                $('#kelurahan_satwil').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })




    $('#kabupaten_pendaftar').attr('disabled', 'disabled')
    $('#kecamatan_pendaftar').attr('disabled', 'disabled')
    $('#kelurahan_pendaftar').attr('disabled', 'disabled')

    $('#provinsi_pendaftar').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_pendaftar').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_pendaftar').removeAttr('disabled')
        }
    })

    $('#kabupaten_pendaftar').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_pendaftar').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_pendaftar').removeAttr('disabled')
        }
    })

    $('#kecamatan_pendaftar').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_pendaftar').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_pendaftar').removeAttr('disabled')
            }
        })
        // Provinsi dinamis pendaftar
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_pendaftar').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis pendaftar
    $('#provinsi_pendaftar').change(function() {
        let provinsi_id = $('#provinsi_pendaftar').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_pendaftar').html(data)
                $('#kabupaten_pendaftar').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis pendaftar
    $('#kabupaten_pendaftar').change(function() {
        let kabupaten_id = $('#kabupaten_pendaftar').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_pendaftar').html(data)
                $('#kecamatan_pendaftar').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis pendaftar
    $('#kecamatan_pendaftar').change(function() {
        let kecamatan_id = $('#kecamatan_pendaftar').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_pendaftar').html(data)
                $('#kelurahan_pendaftar').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })

    $('#nomor_identitas_pendaftar').keyup(function() {
        if ($('#nomor_identitas_pendaftar').val() != "") {
            $('#nomor_paspor_pendaftar').attr('disabled', 'disabled')
        } else {
            $('#nomor_paspor_pendaftar').removeAttr('disabled')
        }
    })


    $('#kabupaten_pasangan').attr('disabled', 'disabled')
    $('#kecamatan_pasangan').attr('disabled', 'disabled')
    $('#kelurahan_pasangan').attr('disabled', 'disabled')

    $('#provinsi_pasangan').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_pasangan').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_pasangan').removeAttr('disabled')
        }
    })

    $('#kabupaten_pasangan').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_pasangan').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_pasangan').removeAttr('disabled')
        }
    })

    $('#kecamatan_pasangan').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_pasangan').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_pasangan').removeAttr('disabled')
            }
        })
        // Provinsi dinamis pasangan
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_pasangan').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis pasangan
    $('#provinsi_pasangan').change(function() {
        let provinsi_id = $('#provinsi_pasangan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_pasangan').html(data)
                $('#kabupaten_pasangan').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis pasangan
    $('#kabupaten_pasangan').change(function() {
        let kabupaten_id = $('#kabupaten_pasangan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_pasangan').html(data)
                $('#kecamatan_pasangan').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis pasangan
    $('#kecamatan_pasangan').change(function() {
        let kecamatan_id = $('#kecamatan_pasangan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_pasangan').html(data)
                $('#kelurahan_pasangan').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })


    $('#kabupaten_ayah').attr('disabled', 'disabled')
    $('#kecamatan_ayah').attr('disabled', 'disabled')
    $('#kelurahan_ayah').attr('disabled', 'disabled')

    $('#provinsi_ayah').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_ayah').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_ayah').removeAttr('disabled')
        }
    })

    $('#kabupaten_ayah').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_ayah').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_ayah').removeAttr('disabled')
        }
    })

    $('#kecamatan_ayah').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_ayah').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_ayah').removeAttr('disabled')
            }
        })
        // Provinsi dinamis ayah
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_ayah').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis ayah
    $('#provinsi_ayah').change(function() {
        let provinsi_id = $('#provinsi_ayah').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_ayah').html(data)
                $('#kabupaten_ayah').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis ayah
    $('#kabupaten_ayah').change(function() {
        let kabupaten_id = $('#kabupaten_ayah').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_ayah').html(data)
                $('#kecamatan_ayah').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis ayah
    $('#kecamatan_ayah').change(function() {
        let kecamatan_id = $('#kecamatan_ayah').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_ayah').html(data)
                $('#kelurahan_ayah').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })


    $('#kabupaten_ibu').attr('disabled', 'disabled')
    $('#kecamatan_ibu').attr('disabled', 'disabled')
    $('#kelurahan_ibu').attr('disabled', 'disabled')

    $('#provinsi_ibu').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_ibu').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_ibu').removeAttr('disabled')
        }
    })

    $('#kabupaten_ibu').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_ibu').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_ibu').removeAttr('disabled')
        }
    })

    $('#kecamatan_ibu').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_ibu').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_ibu').removeAttr('disabled')
            }
        })
        // Provinsi dinamis ibu
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_ibu').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis ibu
    $('#provinsi_ibu').change(function() {
        let provinsi_id = $('#provinsi_ibu').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_ibu').html(data)
                $('#kabupaten_ibu').prepend('<option selected>Pilih Kabupaten</option>')
            },

        })
    })

    // kecamatan dinamis ibu
    $('#kabupaten_ibu').change(function() {
        let kabupaten_id = $('#kabupaten_ibu').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_ibu').html(data)
                $('#kecamatan_ibu').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis ibu
    $('#kecamatan_ibu').change(function() {
        let kecamatan_id = $('#kecamatan_ibu').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_ibu').html(data)
                $('#kelurahan_ibu').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })

    $('#kabupaten_saudara').attr('disabled', 'disabled')
    $('#kecamatan_saudara').attr('disabled', 'disabled')
    $('#kelurahan_saudara').attr('disabled', 'disabled')

    $('#provinsi_saudara').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_saudara').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_saudara').removeAttr('disabled')
        }
    })

    $('#kabupaten_saudara').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_saudara').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_saudara').removeAttr('disabled')
        }
    })

    $('#kecamatan_saudara').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_saudara').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_saudara').removeAttr('disabled')
            }
        })
        // Provinsi dinamis saudara
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_saudara').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis saudara
    $('#provinsi_saudara').change(function() {
        let provinsi_id = $('#provinsi_saudara').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_saudara').html(data)
                $('#kabupaten_saudara').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis saudara
    $('#kabupaten_saudara').change(function() {
        let kabupaten_id = $('#kabupaten_saudara').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_saudara').html(data)
                $('#kecamatan_saudara').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis saudara
    $('#kecamatan_saudara').change(function() {
        let kecamatan_id = $('#kecamatan_saudara').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_saudara').html(data)
                $('#kelurahan_saudara').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })


    $('#kabupaten_pendidikan').attr('disabled', 'disabled')
    $('#kecamatan_pendidikan').attr('disabled', 'disabled')
    $('#kelurahan_pendidikan').attr('disabled', 'disabled')

    $('#provinsi_pendidikan').change(function() {
        if ($(this).val() == "") {
            $('#kabupaten_pendidikan').attr('disabled', 'disabled')
        } else {
            $('#kabupaten_pendidikan').removeAttr('disabled')
        }
    })

    $('#kabupaten_pendidikan').change(function() {
        if ($(this).val() == "") {
            $('#kecamatan_pendidikan').attr('disabled', 'disabled')
        } else {
            $('#kecamatan_pendidikan').removeAttr('disabled')
        }
    })

    $('#kecamatan_pendidikan').change(function() {
            if ($(this).val() == "") {
                $('#kelurahan_pendidikan').attr('disabled', 'disabled')
            } else {
                $('#kelurahan_pendidikan').removeAttr('disabled')
            }
        })
        // Provinsi dinamis pendidikan
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                $('#provinsi_pendidikan').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })
        },
    })

    // kabupaten dinamis pendidikan
    $('#provinsi_pendidikan').change(function() {
        let provinsi_id = $('#provinsi_pendidikan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupaten_pendidikan').html(data)
                $('#kabupaten_pendidikan').prepend('<option selected>Pilih Kabupaten</option>')

            },

        })
    })

    // kecamatan dinamis pendidikan
    $('#kabupaten_pendidikan').change(function() {
        let kabupaten_id = $('#kabupaten_pendidikan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatan_pendidikan').html(data)
                $('#kecamatan_pendidikan').prepend('<option selected>Pilih Kecamatan</option>')

            },

        })
    })

    // kelurahan dinamis pendidikan
    $('#kecamatan_pendidikan').change(function() {
        let kecamatan_id = $('#kecamatan_pendidikan').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahan_pendidikan').html(data)
                $('#kelurahan_pendidikan').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })




    $('input.isMaxLength').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "badge badge-info",
        limitReachedClass: "badge badge-danger",
        separator: ' / ',
        preText: ' ',
        postText: ' Karakter.',
        validate: true
    });

})


$('#btn-hapus').click(function(event) {
    event.preventDefault()
    alert('Apakah Anda Yakin Ingin Menghapus Data ini?')
})