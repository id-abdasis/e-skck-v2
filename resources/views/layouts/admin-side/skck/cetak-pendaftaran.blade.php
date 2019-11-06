<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cetak SKCK!</title>
    <style>
        td.jenis {
            padding: 0;
        }
        
        p {
            margin-bottom: 0px !important;
        }
        
        * {
            margin: 0;
            padding: 0;
        }
        
        .judul-surat {
            text-align: center;
            font-weight: 800;
            font-size: 10px;
            text-transform: uppercase;
        }
        
        tr {
            margin-bottom: 0px !important;
        }
        
        .judul-surat-kiri {
            position: relative;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
            font-size: 10px;
            text-transform: uppercase;
        }
        
        #indonesia {
            text-decoration: underline;
            margin: 0;
            padding: 0;
        }
        
        .titik {
            width: 10px;
        }
        
        .jenis {
            width: 150px;
        }
        
        .jenis p {
            font-size: 14px;
            margin: 0px;
            padding: 0;
        }
        
        .tanda-tangan {
            position: absolute;
            right: 0;
            margin-right: 50px;
        }
        
        #posisi-kiri {
            position: relative;
            margin-left: 150;
            font-weight: 800;
            font-size: 10px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="diprint">

        <div id="posisi-kiri">
            <h4 id="indonesia">{{ $template->judul_kiri_atas }}</h4>
            <h4>{{ $template->satuan_kepala }}</h4>
            <P>{{$template->alamat_di_judul}}</P>
        </div>

        <div class="judul-surat">
            <h4 id="indonesia">Surat Keterangan Laporan Kepolisian</h4>
            <h4>Police Record</h4>
            <P>Nomor: SKCK/2019/YANMAS/0001/T/2019</P>
        </div>

        <div class="isi-surat ml-3">
            <p>Diterangkan Bersama Hal Ini:</p>
            <table class="table table-borderless table table-sm">
                <tbody>
                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Nama</p>
                            <p>Name</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->nama_lengkap_pendaftar }}</td>

                    </tr>
                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Jenis Kelamin</p>
                            <p>Sex</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->jenis_kelamin_pendaftar }}</td>
                    </tr>
                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Kebangsaan Indonesia</p>
                            <p>Nationality</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->kewarganegaraan_pendaftar}}</td>
                    </tr>

                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Agama</p>
                            <p>Religion</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->agama_pendaftar }}</td>
                    </tr>

                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Tempat Tanggal Lahir</p>
                            <p>Place and Date of birth</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{$biodata->tempat_lahir_pendaftar}}, {{ $biodata->tanggal_lahir_pendaftar }}</td>
                    </tr>

                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Tempat Tinggal Sekarang</p>
                            <p>Current Adress</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->alamat_pendaftar }}</td>
                    </tr>

                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Pekerjaan</p>
                            <p>Occupation</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->pekerjaan_pendaftar }}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless table table-sm">
                <tbody>
                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Nomor KTP</p>
                            <p>Identiti Number</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->nomor_identitas_pendaftar }}</td>
                    </tr>
                    <tr>
                        <td class="jenis">
                            <p id="indonesia">Nomor Paspor</p>
                            <p>Pasport Number</p>
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->nomor_paspor_pendaftar == 'tidak ada' ? : '-' }}</td>
                    </tr>
                </tbody>
            </table>
            <p><u>Setelah di adakan penelitian hingga saat di keluarkan surat keterangan ini yang berdasarkan: </u>
                <br>As of screening through the issue hereof by virtue of
            </p>
            <ol type="a" class="ml-5">
                <li>
                    <p>
                        <u>Catatan Kepolisan yang ada</u><br> Exiting Police record
                    </p>
                </li>
                <li>
                    <p><u>Surat keterangan dari Kepala Desa / Lurah</u> <br> Information from local authorities
                    </p>
                </li>
            </ol>
            <p class="ml-5"> <u><b>Bahwa nama diatas tidak memiliki catatan atau keterlibatan dalam catatan kriminal apapun</b></u> <br> The bearer herof proves not to be involved in any criminal cases </p>

            <table class="table table-borderless table table-sm ml-5">
                <tbody>
                    <tr>
                        <td style="width:300px; padding:0">
                            <p id="indonesia"><u>Selama Iya Berada di Indonesia Dari</u> </p>
                            during his/her stay in Indonesia from
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ date('d-M-Y') }}</td>
                    </tr>
                    <tr>
                        <td style="width:300px; padding:0">
                            <p id="indonesia"> <u>Sampai Dengan</u></p>
                            To
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ date('d-M-Y', strtotime('+1 month'))}}</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-center"><u>Keterangan ini di berikan berhubungan dengan permohonan</u> <br> This certificate is issued at the Request to the applicant</p>

            <table class="table table-borderless table table-sm ml-5">
                <tbody>
                    <tr>
                        <td style="width:300px; padding:0">
                            <p id="indonesia"> <u>Untuk Keperluan/menuju*</u> <br> </p>For the purpose
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ $biodata->satwil['keperluan'] }}</td>
                    </tr>
                    <tr>
                        <td style="width:300px; padding:0">
                            <p id="indonesia"> <u>Berlaku Dari Tanggal</u> <br> </p> Valid from
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ date('d-M-Y')}}</td>
                    </tr>

                    <tr>
                        <td style="width:300px; padding:0">
                            <p id="indonesia"> <u>Sampai dengan</u> <br> </p>To
                        </td>
                        <td class="titik">:</td>
                        <td class="data">{{ date('d-M-Y', strtotime('+7 month'))}}</td>
                    </tr>

                </tbody>
            </table>

            <div class="tanda-tangan">
                <tr>
                    <td style="width:300px; padding:0">
                        <p id="indonesia"> <u>Dikeluargan</u> <br> </p>Issued in
                    </td>
                    <td class="titik">:</td>
                    <td class="data">{{ $template->lokasi_cetak}}</td>
                </tr>

                <tr>
                    <td style="width:300px; padding:0">
                        <p id="indonesia"> <u>Pada Tanggal</u> <br> </p>On
                    </td>
                    <td class="titik">:</td>
                    <td class="data">{{ date('d-F-Y')}}</td>
                </tr>
                <p class="center-text" style="text-transform: uppercase; padding-bottom: 200px;"><b>a.n {{ $template->judul_kiri_atas }}</b></p>
                <p class="center-text"> <u><b>{{ $template->satuan_kepala }}</b></u> </p>
                <p class="center-text"><b>{{ $template->jabatan }}</b></p>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('#diprint').ready(function() {
            window.print();
            window.close()
        });
    </script>
</body>

</html>