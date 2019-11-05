let saudara = $('.data-saudara').length + 1;
for (let dataProvinsi = 1; dataProvinsi < saudara; dataProvinsi++) {
    let selected_provinsi_saudara = $('#selected-provinsi-saudara-' + (dataProvinsi)).val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function(key, val) {
                let list_provinsi = $('#provinsi_saudara_' + (dataProvinsi)).append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_provinsi
                if (selected_provinsi_saudara == val['nama']) {
                    $(list_provinsi).find('option[value="' + val['id'] + selected_provinsi_saudara + '"]').attr("selected", "selected");
                }
            })

        },

    })
    let kabupaten_id = $('#selected-kabupaten-saudara-' + (dataProvinsi)).val().replace(/\D/g, '')
    let selected_kecamatan = $('#selected-kecamatan-saudara-' + (dataProvinsi)).val().replace(/\d/g, '')
    $.ajax({
        url: '/api/v2/kecamatan/' + kabupaten_id,
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            const obj = JSON.parse(data)
            $.each(obj['kecamatans'], function(key, val) {
                let list_kecamatan = $('#kecamatan_saudara_' + (dataProvinsi)).append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                list_kecamatan
                if (selected_kecamatan == val['nama']) {
                    $(list_kecamatan).find('option[value="' + val['id'] + selected_kecamatan + '"]').attr("selected", "selected");
                }
            })

        },

    })
}