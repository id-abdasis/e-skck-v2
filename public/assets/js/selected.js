$(document).ready(function() {
    // Part of for edit form

    let selected_provinsi = $('#selected-provinsi-satwil').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-satwil').val() != "") {
        let provinsi_id = $('#selected-provinsi-satwil').val().replace(/\D/g, '')
        let selected_kabupaten = $('#selected-kabupaten-satwil').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_satwil').change(function() {
            $('#kabupaten_satwil').empty()
            let provinsi_id = $('#provinsi_satwil').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-satwil').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-satwil').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-satwil').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_satwil').change(function() {
            $('#kecamatan_satwil').empty()
            let kabupaten_id = $('#kabupaten_satwil').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-satwil').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-satwil').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-satwil').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_satwil').change(function() {
            $('#kelurahan_satwil').empty()
            let kacamatan_id = $('#kecamatan_satwil').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_satwil').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }

})