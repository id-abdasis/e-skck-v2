$(document).ready(function() {
    // Part of for edit form
    let selected_provinsi = $('#selected-provinsi-satwil').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
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
            url: '/api/v2/kabupaten/' + provinsi_id,
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
                url: '/api/v2/kabupaten/' + provinsi_id,
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
            url: '/api/v2/kecamatan/' + kabupaten_id,
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
                url: '/api/v2/kecamatan/' + kabupaten_id,
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
            url: '/api/v2/kelurahan/' + kecamatan_id,
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
                url: '/api/v2/kelurahan/' + kacamatan_id,
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


    // Selected Kota Data Diri Pendaftar
    let selected_provinsi_pendaftar = $('#selected-provinsi-pendaftar').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_pendaftar == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_pendaftar + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-pendaftar').val() != "") {
        let provinsi_id_pendaftar = $('#selected-provinsi-pendaftar').val().replace(/\D/g, '')
        let selected_kabupaten_pendaftar = $('#selected-kabupaten-pendaftar').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id_pendaftar,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_pendaftar == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_pendaftar + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_pendaftar').change(function() {
            $('#kabupaten_pendaftar').empty()
            let provinsi_id = $('#provinsi_pendaftar').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-pendaftar').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-pendaftar').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-pendaftar').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_pendaftar').change(function() {
            $('#kecamatan_pendaftar').empty()
            let kabupaten_id = $('#kabupaten_pendaftar').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-pendaftar').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-pendaftar').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-pendaftar').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_pendaftar').change(function() {
            $('#kelurahan_pendaftar').empty()
            let kacamatan_id = $('#kecamatan_pendaftar').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_pendaftar').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }




    // DATA SELECTED PASANGAN
    let selected_provinsi_pasangan = $('#selected-provinsi-pasangan').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_pasangan == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_pasangan + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-pasangan').val() != "") {
        let provinsi_id_pasangan = $('#selected-provinsi-pasangan').val().replace(/\D/g, '')
        let selected_kabupaten_pasangan = $('#selected-kabupaten-pasangan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id_pasangan,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_pasangan == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_pasangan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_pasangan').change(function() {
            $('#kabupaten_pasangan').empty()
            let provinsi_id = $('#provinsi_pasangan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-pasangan').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-pasangan').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-pasangan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_pasangan').change(function() {
            $('#kecamatan_pasangan').empty()
            let kabupaten_id = $('#kabupaten_pasangan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-pasangan').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-pasangan').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-pasangan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_pasangan').change(function() {
            $('#kelurahan_pasangan').empty()
            let kacamatan_id = $('#kecamatan_pasangan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_pasangan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }


    // DATA SELECTED ayah
    let selected_provinsi_ayah = $('#selected-provinsi-ayah').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_ayah == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_ayah + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-ayah').val() != "") {
        let provinsi_id_ayah = $('#selected-provinsi-ayah').val().replace(/\D/g, '')
        let selected_kabupaten_ayah = $('#selected-kabupaten-ayah').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id_ayah,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_ayah == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_ayah + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_ayah').change(function() {
            $('#kabupaten_ayah').empty()
            let provinsi_id = $('#provinsi_ayah').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-ayah').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-ayah').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-ayah').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_ayah').change(function() {
            $('#kecamatan_ayah').empty()
            let kabupaten_id = $('#kabupaten_ayah').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-ayah').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-ayah').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-ayah').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_ayah').change(function() {
            $('#kelurahan_ayah').empty()
            let kacamatan_id = $('#kecamatan_ayah').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_ayah').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }

    // DATA SELECTED ibu
    let selected_provinsi_ibu = $('#selected-provinsi-ibu').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_ibu == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_ibu + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-ibu').val() != "") {
        let provinsi_id_ibu = $('#selected-provinsi-ibu').val().replace(/\D/g, '')
        let selected_kabupaten_ibu = $('#selected-kabupaten-ibu').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id_ibu,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_ibu == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_ibu + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_ibu').change(function() {
            $('#kabupaten_ibu').empty()
            let provinsi_id = $('#provinsi_ibu').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-ibu').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-ibu').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-ibu').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_ibu').change(function() {
            $('#kecamatan_ibu').empty()
            let kabupaten_id = $('#kabupaten_ibu').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-ibu').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-ibu').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-ibu').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_ibu').change(function() {
            $('#kelurahan_ibu').empty()
            let kacamatan_id = $('#kecamatan_ibu').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_ibu').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }

    // DATA SELECTED saudara
    let selected_provinsi_saudara = $('#selected-provinsi-saudara').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_saudara == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_saudara + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-saudara').val() != "") {
        let provinsi_id = $('#selected-provinsi-saudara').val().replace(/\D/g, '')
        let selected_kabupaten_saudara = $('#selected-kabupaten-saudara').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_saudara == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_saudara + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_saudara').change(function() {
            $('#kabupaten_saudara').empty()
            let provinsi_id = $('#provinsi_saudara').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-saudara').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-saudara').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-saudara').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_saudara').change(function() {
            $('#kecamatan_saudara').empty()
            let kabupaten_id = $('#kabupaten_saudara').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-saudara').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-saudara').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-saudara').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_saudara').change(function() {
            $('#kelurahan_saudara').empty()
            let kacamatan_id = $('#kecamatan_saudara').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_saudara').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }


    // Data selected Pendidikan
    let selected_provinsi_pendidikan = $('#selected-provinsi-pendidikan').val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_pendidikan == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_pendidikan + '"]').attr("selected", "selected");
                }
            })

        },

    })

    if ($('#selected-provinsi-pendidikan').val() != "") {
        let provinsi_id_pendidikan = $('#selected-provinsi-pendidikan').val().replace(/\D/g, '')
        let selected_kabupaten_pendidikan = $('#selected-kabupaten-pendidikan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kabupaten/' + provinsi_id_pendidikan,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kabupatens'], function(key, val) {
                    let list_kabupaten = $('#kabupaten_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kabupaten
                    if (selected_kabupaten_pendidikan == val['nama']) {
                        $(list_kabupaten).find('option[value="' + val['id'] + selected_kabupaten_pendidikan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#provinsi_pendidikan').change(function() {
            $('#kabupaten_pendidikan').empty()
            let provinsi_id = $('#provinsi_pendidikan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function(key, val) {
                        let list_kabupaten = $('#kabupaten_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                    })

                },

            })
        })
    }




    // kecamatan dinamis
    if ($('#selected-kabupaten-pendidikan').val() != "") {
        let kabupaten_id = $('#selected-kabupaten-pendidikan').val().replace(/\D/g, '')
        let selected_kecamatan = $('#selected-kecamatan-pendidikan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['kecamatans'], function(key, val) {
                    let list_kecamatan = $('#kecamatan_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kecamatan
                    if (selected_kecamatan == val['nama']) {
                        $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kabupaten_pendidikan').change(function() {
            $('#kecamatan_pendidikan').empty()
            let kabupaten_id = $('#kabupaten_pendidikan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kecamatan/' + kabupaten_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kecamatans'], function(key, val) {
                        let list_kecamatan = $('#kecamatan_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kecamatan
                    })

                },

            })
        })
    }

    // kelurahan dinamis
    if ($('#selected-kecamatan-pendidikan').val() != "") {
        let kecamatan_id = $('#selected-kecamatan-pendidikan').val().replace(/\D/g, '')
        let selected_kelurahan = $('#selected-kelurahan-pendidikan').val().replace(/\d/g, '')
        $.ajax({
            url: '/api/v2/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                const obj = JSON.parse(data)
                $.each(obj['desas'], function(key, val) {
                    let list_kelurahan = $('#kelurahan_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    list_kelurahan
                    if (selected_kelurahan == val['nama']) {
                        $(list_kelurahan).find('option[value="' + val['id'] + selected_kelurahan + '"]').attr("selected", "selected");
                    }
                })

            },

        })

        $('#kecamatan_pendidikan').change(function() {
            $('#kelurahan_pendidikan').empty()
            let kacamatan_id = $('#kecamatan_pendidikan').val().replace(/\D/g, '')
            $.ajax({
                url: '/api/v2/kelurahan/' + kacamatan_id,
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    const obj = JSON.parse(data)
                    $.each(obj['desas'], function(key, val) {
                        let list_kelurahan = $('#kelurahan_pendidikan').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kelurahan
                    })

                },

            })
        })
    }


})




$('input[name="status_perkawinan_pendaftar"]').change(function() {
    if (this.value == "Belum Kawin") {
        $('#data_pasangan').css({ 'background': '#f1f2f6', 'padding': '10px', 'border-radius': '4px', 'margin-bottom': '20px' })
        $(" #data_pasangan :input").attr('value', "-")
        $(" #data_pasangan :input").prop('disabled', true)
    } else if (this.value == "Sudah Kawin") {
        $('#data_pasangan').css({ 'background': '', 'padding': '', 'border-radius': '' })
        $(" #data_pasangan :input").removeAttr('disabled')
        $(" #data_pasangan :input").val('')

    }
})