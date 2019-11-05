// Clone form pada form saudara
var maxRows = 10;
var minRows = 1;
$('#addRow').click(function(e) {
    confirm('Yakin mau menambahkan form saudara?')
    e.preventDefault();
    var curMaxInput = $(".data-saudara").length;
    $('.data-saudara:first')
        .clone()
        .find("input:text").val("").end()
        .find('textarea').val("").end()
        .insertAfter($('.data-saudara:last'));
    $(".data-saudara:last select#provinsisaudara").attr('id', 'provinsisaudara' + (curMaxInput + 1));
    $(".data-saudara:last select#kabupatensaudara").attr('id', 'kabupatensaudara' + (curMaxInput + 1));
    $(".data-saudara:last select#kecamatansaudara").attr('id', 'kecamatansaudara' + (curMaxInput + 1));
    $(".data-saudara:last select#kelurahansaudara").attr('id', 'kelurahansaudara' + (curMaxInput + 1));
    $(".data-saudara:last #jenis_kelamin_saudara").attr('id', 'jenis_kelamin_sadara' + (curMaxInput + 1));

    $('#kecamatansaudara' + (curMaxInput + 1)).attr('disabled', 'disabled');
    $('#kelurahansaudara' + (curMaxInput + 1)).attr('disabled', 'disabled');
    $('#kabupatensaudara' + (curMaxInput + 1)).attr('disabled', 'disabled');



    $('#provinsisaudara' + (curMaxInput + 1)).change(function() {
        if ($('#provinsisaudara' + (curMaxInput + 1)).val() != "") {
            $('#kabupatensaudara' + (curMaxInput + 1)).removeAttr('disabled');
        }
        var provinsi_id = $('#provinsisaudara' + (curMaxInput + 1)).val().replace(/\D/g, '');
        $.ajax({
            url: '/api/kabupaten/' + provinsi_id,
            method: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kabupatensaudara' + (curMaxInput + 1)).html(data)
                $('#kabupatensaudara' + (curMaxInput + 1)).append('<option value="" selected>Pilih Kabupaten</option>')

            }
        })

    })

    $('#kabupatensaudara' + (curMaxInput + 1)).change(function() {
        if ($('#kabupatensaudara' + (curMaxInput + 1)).val() != "") {
            $('#kecamatansaudara' + (curMaxInput + 1)).removeAttr('disabled');
        }
        let kabupaten_id = $('#kabupatensaudara' + (curMaxInput + 1)).val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            method: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kecamatansaudara' + (curMaxInput + 1)).html(data)
                $('#kecamatansaudara' + (curMaxInput + 1)).append('<option value="" selected>Pilih Kecamatan</option>')

            }
        })

    })

    $('#kecamatansaudara' + (curMaxInput + 1)).change(function() {
        if ($('#kecamatansaudara' + (curMaxInput + 1)).val() != "") {
            $('#kelurahansaudara' + (curMaxInput + 1)).removeAttr('disabled');

        }
        let kecamatan_id = $('#kecamatansaudara' + (curMaxInput + 1)).val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            method: 'GET',
            dataType: 'html',
            success: function(data) {
                $('#kelurahansaudara' + (curMaxInput + 1)).html(data)
                $('#kelurahansaudara' + (curMaxInput + 1)).append('<option value="" selected>Pilih Kelurahan</option>')

            }
        })

    })



})