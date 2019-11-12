@extends('layouts.app-client')

@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/dropzonejs/dist/dropzone.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.css">
@endsection
@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Validation Wizard Classic -->
            <div class="js-wizard-validation-classic block" id="">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-validation-classic-step1" data-toggle="tab">Satwil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step2" data-toggle="tab">Data Pribadi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step3" data-toggle="tab">Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step4" data-toggle="tab">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step5" data-toggle="tab">Data Pidana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step6" data-toggle="tab">Ciri Fisik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step7" data-toggle="tab">Lampiran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step8" data-toggle="tab">Keterangan</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="js-wizard-validation-classic-form" enctype="multipart/form-data" id="" action="{{ route('store-skck')}}" method="post">
                    <!-- Steps Content -->
                    @csrf
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keperluan">Silahkan pilih jenis keperluan pembuatan SKCK sesuai dengan tingkat kewenangan yang diperlukan</label>
                                    <select required class="form-control" id="keperluan" name="keperluan">
                                        <option value="">Pilih Keperluan</option>
                                        <option value="Pencalonan Anggota Legislatif Tingkat Kabupaten/Kota">POLRES - Pencalonan Anggota Legislatif Tingkat Kabupaten/Kota</option>
                                        <option value="Melamar Sebagai PNS">POLRES - Melamar Sebagai PNS</option>
                                        <option value="Melamar Sebagai Anggota TNI/POLRI">POLRES - Melamar Sebagai Anggota TNI/POLRI</option>
                                        <option value="Pencalonan Pejabat Publik">POLRES - Pencalonan Pejabat Publik</option>
                                        <option value="Kepemilikan Senjata Api">POLRES - Kepemilikan Senjata Api</option>
                                        <option value="Pencalonan Kepala Daerah Tingkat Kabupaten/Kota">POLRES - Pencalonan Kepala Daerah Tingkat Kabupaten/Kota</option>
                                        <option value="Melamar Pekerjaan">POLRES - Melamar Pekerjaan</option>
                                        <option value="Melamar Pekerjaan">POLSEK - Melamar Pekerjaan</option>
                                        <option value="Pencalonan Kepala Desa">POLSEK - Pencalonan Kepala Desa</option>
                                        <option value="Pencalonan Sekertaris Desa">POLSEK - Pencalonan Sekertaris Desa</option>
                                        <option value="Pindah Alamat">POLSEK - Pindah Alamat</option>
                                        <option value="Melanjutkan Sekolah">POLSEK - Melanjutkan Sekolah</option>
                                    </select>                            
                                </div>
                                <div class="form-group">
                                    <label for="alamat_satwil">Alamat (Sesuai KTP)</label>
                                    <textarea class="form-control" type="text" rows="5" id="alamat_satwil" name="alamat_satwil" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi_satwil">Provinsi</label>
                                    <select required class="form-control" id="provinsi_satwil" name="provinsi_satwil">
                                        <option value="">Pilih Provinsi</option>
                                    </select>   
                                </div>  
                                
                                <div class="form-group">
                                    <label for="kabupaten_satwil">Kabupaten/Kota (Sesuai KTP)</label>
                                    <select required class="form-control" id="kabupaten_satwil" name="kabupaten_satwil">
                                        <option value="">Pilih Provinsi Dulu</option>
    
                                    </select>   
                                </div>  
    
                                <div class="form-group">
                                    <label for="kecamatan_satwil">Kecamatan (Sesuai KTP)</label>
                                    <select required class="form-control" id="kecamatan_satwil"   name="kecamatan_satwil">
                                        <option value="">Pilih Kabupaten Dulu</option>
                                    </select>   
                                </div>
                                
                                <div class="form-group">
                                    <label for="kelurahan_satwil">Kelurahan (Sesuai KTP)</label>
                                    <select required class="form-control" id="kelurahan_satwil" name="kelurahan_satwil">
                                        <option value="">Pilih Kecamatan Dulu</option>
                                        
                                    </select>   
                                </div>
    
                                <div class="form-group">
                                    <label class="">Pembayaran</label>
                                    <div class="custom-control custom-radio mb-5">
                                        <input class="custom-control-input" required type="radio" name="pembayaran_satwil" id="pembayaran_satwil" value="Ditempat">
                                        <label class="custom-control-label" for="pembayaran_satwil">Bayar di Tempat</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-validation-classic-step2" role="tabpanel">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_lengkap_pendaftar">Nama Lengkap</label>
                                    <input required type="text" class="form-control" placeholder="Masukan Nama Lengkap" id="nama_lengkap_pendaftar" name="nama_lengkap_pendaftar" valu="{{ old('nama_lengkap_pendaftar') }}"> 
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-md-7">
                                            <label for="tempat_lahir_pendaftar">Tempat Lahir</label>
                                            <input required type="text" placeholder="Masukan Tempat Lahir" class="form-control" name="tempat_lahir_pendaftar" id="tempat_lahir_pendaftar" value="{{ old('tempat_lahir_pendaftar') }}" >    
                                        </div>
        
                                        <div class="form-group col-md-5">
                                            <label for="tanggal_lahir_pendaftar">Tanggal Lahir Pendaftar</label>
                                            <input required type="text" class="js-flatpickr form-control bg-white" id="tanggal_lahir_pendaftar" name="tanggal_lahir_pendaftar" placeholder="Pilih Tanggal Lahir" data-date-format="d-m-Y">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="col-md-12">
                                                <label for="">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="jenis_kelamin_pendaftar" id="laki-laki" value="Laki-Laki" checked="">
                                                    <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input class="custom-control-input" type="radio" name="jenis_kelamin_pendaftar" id="perempuan" value="Perempuan">
                                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
            
                                        
                                        <div class="form-group col-md-4">
                                            <div class="col-md-12">
                                                <label for="">Status Perkawinan</label>
                                            </div>
                                        <div class="col-md-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input required class="custom-control-input" type="radio" name="status_perkawinan_pendaftar" id="sudah_wakin" value="Sudah Kawin">
                                                    <label class="custom-control-label" for="sudah_wakin">Sudah Kawin</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input required class="custom-control-input" type="radio" name="status_perkawinan_pendaftar" id="belum_kawin" value="Belum Kawin">
                                                    <label class="custom-control-label" for="belum_kawin">Belum Kawin</label>
                                                </div>
                                        </div>
                                        </div>
            
                                        
                                        <div class="form-group col-md-4">
                                            <div class="col-md-12">
                                                <label for="">Kewarganegaraan</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input required class="custom-control-input" type="radio" name="kewarganegaraan_pendaftar" id="wni" value="WNI" checked="">
                                                    <label class="custom-control-label" for="wni">WNI</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                                    <input required class="custom-control-input" type="radio" name="kewarganegaraan_pendaftar" id="wna" value="WNA">
                                                    <label class="custom-control-label" for="wna">WNA</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="agama_pendaftar">Agama</label>
                                            <select required name="agama_pendaftar" id="" class="form-control">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Kepercayaan Tuhan YEM">Kepercayaan Tuhan YME</option>
                                            </select>
                                        </div>
        
                                        <div class="form-group col-md-4">
                                            <label for="pekerjaan_pendaftar">Pekerjaan</label>
                                            <input required class="form-control" type="text" name="pekerjaan_pendaftar" value="{{ old('pekerjaan_pendaftar') }}" placeholder="Masukan Pekerjaan Anda">
                                        </div>
        
                                        <div class="form-group col-md-4">
                                            <label for="telepon_pendaftar">Telepon</label>
                                            <input required class="form-control" type="text" name="telepon_pendaftar" value="{{ old('telepon_pendaftar') }}" placeholder="Masukan Telepon Anda">
                                        </div>
                                    </div>
        
        
                                    <div class="form-group">
                                        <label for="provinsi_pendaftar">Provinsi (Sesuai KTP)</label>
                                        <select required name="provinsi_pendaftar" id="provinsi_pendaftar" class="form-control">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kabupaten_pendaftar">Kabupaten (Sesuai KTP)</label>
                                        <select required name="kabupaten_pendaftar" id="kabupaten_pendaftar" class="form-control">
                                            <option value="">Pilih Provinsi Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kecamatan_pendaftar">Kecamatan (Sesuai KTP)</label>
                                        <select required name="kecamatan_pendaftar" id="kecamatan_pendaftar" class="form-control">
                                            <option value="">Pilih Kabupaten Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kelurahan_pendaftar">Kelurahan (Sesuai KTP)</label>
                                        <select required name="kelurahan_pendaftar" id="kelurahan_pendaftar" class="form-control">
                                            <option value="">Pilih Kecamatan Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="alamat_pendaftar">Alamat Lengkap (Sesuai KTP)</label>
                                        <textarea required class="form-control" name="alamat_pendaftar" id="alamat_pendaftar" cols="30" rows="6"></textarea>
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="jenis_identitas_pendaftar">Jenis Identitas</label>
                                            <select required name="jenis_identitas_pendaftar" id="jenis_identitas_pendaftar" class="form-control">
                                                <option value="">Jenis Identitas</option>
                                                <option value="e-KTP">e-KTP</option>
                                                <option value="KTP">KTP</option>
                                                <option value="KITAS">KITAS</option>
                                                <option value="KITAP">KITAP</option>
                                            </select>
                                        </div>
        
                                        <div class="form-group col-md-4">
                                            <label for="nomor_identitas_pendaftar">Nomor Identitas</label>
                                            <input required class=" form-control isMaxLength" maxlength="18" type="text" id="nomor_identitas_pendaftar" name="nomor_identitas_pendaftar" value="{{ old('nomor_identitas_pendaftar') }}" placeholder="Masukan Identitas Anda" >
                                        </div>
        
                                        <div class="form-group col-md-4">
                                            <label for="nomor_paspor_pendaftar">Nomor Paspor</label>
                                            <input class="form-control" type="text" id="nomor_paspor_pendaftar" name="nomor_paspor_pendaftar" value="{{ old('nomor_paspor_pendaftar') }}" placeholder="Masukan Paspor Anda">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-validation-classic-step3" role="tabpanel">
                            <div class="col-md-12">
                                <h5>A. Data Pasangan</h5>
                                <div id="data_pasangan">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="status_pasangan">Status</label>
                                            <select name="status_pasangan" id="status_pasangan" class="form-control">
                                                <option value="">Pilih Status</option>
                                                <option value="Suami">Suami</option>
                                                <option value="Istri">Istri</option>
                                            </select>
                                        </div>
                
                                        <div class="form-group col-md-7">
                                            <label for="nama_lengkap_pasangan">Nama Lengkap</label>
                                            <input focused  type="text" placeholder="Masukan Nama Lengkap Pasangan" class="form-control" name="nama_lengkap_pasangan" id="nama_lengkap_pasangan" value="{{ old('tempat_lahir_pasangan') }}" >    
                                        </div>
        
                                        <div class="form-group col-md-2">
                                            <label for="umur">Umur</label>
                                            <input  type="text" placeholder="Umur Pasangan" class="form-control" name="umur_pasangan" id="umur_pasangan" value="{{ old('umur_pasangan') }}" >    
                                        </div>
                                    </div>
                                        
            
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="agama_pasangan">Agama</label>
                                            <select  name="agama_pasangan" id="agama_pasangan" class="form-control">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Kepercayaan Tuhan YEM">Kepercayaan Tuhan YME</option>
                                            </select>
                                        </div>
        
                                        <div class="form-group col-md-8">
                                            <label for="pekerjaan_pasangan">Pekerjaan</label>
                                            <input class="form-control" type="text" name="pekerjaan_pasangan" value="{{ old('pekerjaan_pasangan') }}" placeholder="Masukan Pekerjaan Anda">
                                        </div>
                                    </div>
            
            
                                    <div class="form-group">
                                        <label for="provinsi_pasangan">Provinsi (Sesuai KTP)</label>
                                        <select name="provinsi_pasangan" id="provinsi_pasangan" class="form-control">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kabupaten_pasangan">Kabupaten (Sesuai KTP)</label>
                                        <select name="kabupaten_pasangan" id="kabupaten_pasangan" class="form-control">
                                            <option value="">Pilih Provinsi Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kecamatan_pasangan">Kecamatan (Sesuai KTP)</label>
                                        <select name="kecamatan_pasangan" id="kecamatan_pasangan" class="form-control">
                                            <option value="">Pilih Kabupaten Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kelurahan_pasangan">Kelurahan (Sesuai KTP)</label>
                                        <select name="kelurahan_pasangan" id="kelurahan_pasangan" class="form-control">
                                            <option value="">Pilih Kecamatan Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="alamat_pasangan">Alamat Lengkap (Sesuai KTP)</label>
                                        <textarea class="form-control" name="alamat_pasangan" id="alamat_pasangan" cols="30" rows="6"></textarea>
                                    </div>
                                </div>
        
                                <h5>B. Data Ayah</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama_lengkap_ayah">Nama Lengkap</label>
                                        <input required type="text" placeholder="Masukan Nama Lengkap ayah" class="form-control" name="nama_lengkap_ayah" id="nama_lengkap_ayah" value="{{ old('tempat_lahir_ayah') }}" >    
                                    </div>
    
                                   
                                </div>
                                        
            
            
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="agama_ayah">Agama</label>
                                        <select required name="agama_ayah" id="agama_ayah" class="form-control">
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Kepercayaan Tuhan YEM">Kepercayaan Tuhan YME</option>
                                        </select>
                                    </div>
    
                                    <div class="form-group col-md-7">
                                        <label for="pekerjaan_ayah">Pekerjaan</label>
                                        <input required class="form-control" type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" placeholder="Masukan Pekerjaan Anda">
                                    </div>


                                    <div class="form-group col-md-2">
                                            <label for="umur">Umur</label>
                                            <input required required type="text" placeholder="Umur ayah" class="form-control" name="umur_ayah" id="umur_ayah" value="{{ old('umur_ayah') }}" >    
                                        </div>
    
                                </div>
            
            
                                <div class="form-group">
                                    <label for="provinsi_ayah">Provinsi (Sesuai KTP)</label>
                                    <select required name="provinsi_ayah" id="provinsi_ayah" class="form-control">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kabupaten_ayah">Kabupaten (Sesuai KTP)</label>
                                    <select required name="kabupaten_ayah" id="kabupaten_ayah" class="form-control">
                                        <option value="">Pilih Provinsi Dulu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kecamatan_ayah">Kecamatan (Sesuai KTP)</label>
                                    <select required name="kecamatan_ayah" id="kecamatan_ayah" class="form-control">
                                        <option value="">Pilih Kabupaten Dulu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kelurahan_ayah">Kelurahan (Sesuai KTP)</label>
                                    <select required name="kelurahan_ayah" id="kelurahan_ayah" class="form-control">
                                        <option value="">Pilih Kecamatan Dulu</option>
                                    </select>
                                </div>
        
                                <div class="form-group">
                                    <label for="alamat_ayah">Alamat Lengkap (Sesuai KTP)</label>
                                    <textarea required class="form-control" name="alamat_ayah" id="alamat_ayah" cols="30" rows="6"></textarea>
                                </div>
    
    
                                <h5>B. Data Ibu</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nama_lengkap_ibu">Nama Lengkap</label>
                                        <input required type="text" placeholder="Masukan Nama Lengkap ibu" class="form-control" name="nama_lengkap_ibu" id="nama_lengkap_ibu" value="{{ old('tempat_lahir_ibu') }}" >    
                                    </div>
    
                                </div>
                                        
            
            
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="agama_ibu">Agama</label>
                                        <select required name="agama_ibu" id="agama_ibu" class="form-control">
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Kepercayaan Tuhan YEM">Kepercayaan Tuhan YME</option>
                                        </select>
                                    </div>
    
                                    <div class="form-group col-md-7">
                                        <label for="pekerjaan_ibu">Pekerjaan</label>
                                        <input required class="form-control" type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" placeholder="Masukan Pekerjaan Anda">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="umur">Umur</label>
                                        <input required type="text" placeholder="Umur ibu" class="form-control" name="umur_ibu" id="umur_ibu" value="{{ old('umur_ibu') }}" >    
                                    </div>
                                </div>
        
            
                                <div class="form-group">
                                    <label for="provinsi_ibu">Provinsi (Sesuai KTP)</label>
                                    <select required name="provinsi_ibu" id="provinsi_ibu" class="form-control">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kabupaten_ibu">Kabupaten (Sesuai KTP)</label>
                                    <select required name="kabupaten_ibu" id="kabupaten_ibu" class="form-control">
                                        <option value="">Pilih Provinsi Dulu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kecamatan_ibu">Kecamatan (Sesuai KTP)</label>
                                    <select required name="kecamatan_ibu" id="kecamatan_ibu" class="form-control">
                                        <option value="">Pilih Kabupaten Dulu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="kelurahan_ibu">Kelurahan (Sesuai KTP)</label>
                                    <select required name="kelurahan_ibu" id="kelurahan_ibu" class="form-control">
                                        <option value="">Pilih Kecamatan Dulu</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label for="alamat_ibu">Alamat Lengkap (Sesuai KTP)</label>
                                    <textarea required class="form-control" name="alamat_ibu" id="alamat_ibu" cols="30" rows="6"></textarea>
                                </div>
    
    
                                <h5>B. Data Saudara</h5>
                                <div class="data-saudara">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="nama_lengkap_saudara">Nama Lengkap</label>
                                            <input required required type="text" placeholder="Masukan Nama Lengkap saudara" class="form-control" name="nama_lengkap_saudara[]" id="nama_lengkap_saudara" value="{{ old('tempat_lahir_saudara') }}" >    
                                        </div>
        
                                        
                                    </div>
                                        
                
                
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="agama_saudara">Agama</label>
                                            <select required name="agama_saudara[]" id="agama_saudara" class="form-control">
                                                <option value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Kepercayaan Tuhan YEM">Kepercayaan Tuhan YME</option>
                                            </select>
                                        </div>
        
                                        <div class="form-group col-md-7">
                                            <label for="pekerjaan_saudara">Pekerjaan</label>
                                            <input required class="form-control" type="text" name="pekerjaan_saudara[]" value="{{ old('pekerjaan_saudara') }}" placeholder="Masukan Pekerjaan Anda">
                                        </div>
        
                                        <div class="form-group col-md-2">
                                            <label for="umur">Umur</label>
                                            <input required type="text" placeholder="Umur saudara" class="form-control" name="umur_saudara[]" id="umur_saudara" value="{{ old('umur_saudara') }}" >    
                                        </div>
                                    </div>
            
            
                                    <div class="form-group">
                                        <label for="provinsi_saudara">Provinsi (Sesuai KTP)</label>
                                        <select required name="provinsi_saudara[]" id="provinsi_saudara" class="form-control">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kabupaten_saudara">Kabupaten (Sesuai KTP)</label>
                                        <select required name="kabupaten_saudara[]" id="kabupaten_saudara" class="form-control">
                                            <option value="">Pilih Provinsi Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kecamatan_saudara">Kecamatan (Sesuai KTP)</label>
                                        <select required name="kecamatan_saudara[]" id="kecamatan_saudara" class="form-control">
                                            <option value="">Pilih Kabupaten Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="kelurahan_saudara">Kelurahan (Sesuai KTP)</label>
                                        <select required name="kelurahan_saudara[]" id="kelurahan_saudara" class="form-control">
                                            <option value="">Pilih Kecamatan Dulu</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="alamat_saudara">Alamat Lengkap (Sesuai KTP)</label>
                                        <textarea required class="form-control" name="alamat_saudara[]" id="alamat_saudara" cols="30" rows="6"></textarea>
                                    </div>
                                </div>
                                <button type="button" id="addRow" class="btn btn-xs btn-alt-success mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i>Tambah Form Saudara
                                </button>
                            </div>
                        </div>
                        <!-- END Step 3 -->

                        {{-- step 4 --}}
                        <div class="tab-pane" id="wizard-validation-classic-step4" role="tabpanel">
                           <div class="col-md-12">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tingkat_pendidikan">Tingkat</label>
                                        <select required required="" name="tingkat_pendidikan" class="custom-select ">
                                            <option value="">Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMK">SMK</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label for="nama_sekolah">Nama Sekoalh</label>
                                        <input required class=" form-control " maxlength="18" type="text" id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah') }}" placeholder="Masukan Nama Sekolah" >
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label for="tahun_lulus">Tahun Lulus</label>
                                        <input required class="form-control" type="text" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Masukan Tahun Lulus">
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="provinsi_pendidikan">Provinsi Sekolah</label>
                                        <select required class="form-control" name="provinsi_pendidikan" id="provinsi_pendidikan">
                                            <option value="">Pilih Provinsi</option>
                                        </select>
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label for="kabupaten_pendidikan">Kabupaten Sekolah</label>
                                        <select required class="form-control" name="kabupaten_pendidikan" id="kabupaten_pendidikan">
                                            <option value="">Pilih Kabupaten</option>
                                        </select>
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label for="kecamatan_pendidikan">Kecamatan Sekolah</label>
                                        <select required class="form-control" name="kecamatan_pendidikan" id="kecamatan_pendidikan">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>
                           </div>
                        </div>
                        {{-- end step 4 --}}


                        {{-- stetp 5 --}}
                        <div class="tab-pane" id="wizard-validation-classic-step5" role="tabpanel">
                            <div class="col-md-12">
                                <h4>Perkara Pidana</h4>
                                <h6>1. Pidana</h6>
                                <label for="">Apakah Saudara pernah tersangkut dengan perkara pidana</label>
                                <div class="form-group col-md-12 m-0 p-0">
                                    <div class="col-md-12  m-0 p-0">
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="perkara_pidana" id="pernah_pidana" value="Pernah" checked="">
                                            <label class="custom-control-label" for="pernah_pidana">Pernah</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mb-5">
                                            <input class="custom-control-input" type="radio" name="perkara_pidana" id="tidak_pernah_pidana" value="Tidak Pernah">
                                            <label class="custom-control-label" for="tidak_pernah_pidana">Tidak Pernah</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="pidana">
                                    <div class="form-group mb-3">
                                        <label for="">Dalam Perkara Apa?</label>
                                        <input  maxlength="100" name="perkara" type="text" class="form-control">
                                    </div>
    
                                    <div class="form-group mb-3">
                                        <label for="">Bagaimana putusan dan vonis hakim?</label>
                                        <input  maxlength="200" name="vonis" type="text" class="form-control">
                                        <div class="invalid-feedback">
                                            * Keputusan Vonis Harus Diisi
                                        </div>
                                    </div>
    
                                    <div class="form-group mb-3">
                                        <label for="">Apakah saudara saat ini sedang dalam proses perkara pidana ? Kasus apa ?</label>
                                        <input  maxlength="100" name="proses_perkara" type="text" class="form-control">
                                        <div class="invalid-feedback">
                                            * Data Perkara Wajib Diisi
                                        </div>
                                    </div>
    
                                    <div class="form-group mb-3">
                                        <label for="">Sampai sejauh mana proses hukumnya?</label>
                                        <input  maxlength="200" name="hukuman" type="text" class="form-control">
                                        <div class="invalid-feedback">
                                            *  Proses Hukum Wajib Diisi
                                        </div>
                                    </div>
                                </div>
    
                                <hr>
    
                                <h6>2. Pelanggaran</h6>
                                <div class="form-group mb-3">
                                    <label for="">Apakah Saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial ?</label>
                                    <div class="form-group col-md-12 m-0 p-0">
                                        <div class="col-md-12  m-0 p-0">
                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                <input class="custom-control-input" type="radio" name="perkara_pelanggaran" id="pernah_pelanggaran" value="Pernah" checked="">
                                                <label class="custom-control-label" for="pernah_pelanggaran">Pernah</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                <input class="custom-control-input" type="radio" name="perkara_pelanggaran" id="tidak_pernah_pelanggaran" value="Tidak Pernah">
                                                <label class="custom-control-label" for="tidak_pernah_pelanggaran">Tidak Pernah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pelanggaran">
                                    <div class="form-group mb-3">
                                        <label for="">Pelanggaran hukum atau norma-norma sosial apa ?</label>
                                        <input  maxlength="100" name="jenis_pelanggaran" type="text" class="form-control">
                                    </div>
    
                                    <div class="form-group mb-3">
                                        <label for="">Sampai sejauh mana prosesnya?</label>
                                        <input  maxlength="100" name="proses_pelanggaran" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="wizard-validation-classic-step6" role="tabpanel">
                            <div class="col-xs-12 col-md-12">
                                <h2>Ciri Ciri Fisik</h2>
                                <div class="form-group">
                                    <label for="rambut" lang="id">Rambut</label>
                                    <input required="" maxlength="50" type="text" class="form-control input required" name="rambut">
                                    <div class="invalid-feedback">
                                        * Ciri-ciri rambut wajib diisi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="wajah" lang="id">Wajah</label>
                                    <input required="" maxlength="100" type="text" class="form-control" name="wajah">
                                    <div class="invalid-feedback">
                                        * Ciri-ciri wajah wajib diisi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kulit" lang="id">Kulit</label>
                                    <input required="" maxlength="50" type="text" class="form-control" name="kulit">
                                    <div class="invalid-feedback">
                                        * Ciri-ciri kulit wajib diisi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tandaistimewa" lang="id">Tanda Istimewa</label>
                                    <input required="" maxlength="100" type="text" class="form-control" name="tandaistimewa">
                                    <div class="invalid-feedback">
                                        * Ciri-ciri tanda istimewa wajib diisi
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Tinggi Badan</label>
                                        <div class="input-group mb-2">
                                            <input required="" maxlength="3" name="tinggi_badan" type="text" class="form-control" placeholder="Tinggi Badan">
                                            <div class="input-group-append">
                                                <div class="input-group-text">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Berat Badan</label>
                                        <div class="input-group mb-2">
                                            <input required="" maxlength="3" name="berat_badan" type="text" class="form-control" placeholder="Berat Badan">
                                            <div class="input-group-append">
                                                <div class="input-group-text">kg</div>
                                            </div>
                                            <div class="invalid-feedback">
                                                * Berat Badan Wajib Diisi
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="rumusjari" lang="id">Rumus Sidik Jari (kiri)</label>
                                        <input  maxlength="20" type="text" class="form-control" name="rumus_jari_kiri">
                                        <small class="text-danger mt-2">Isi dengan <b>'-'</b> Jika Belum pernah scan sidik jari </small>
                                        
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="rumusjari" lang="id">Rumus Sidik Jari (kanan)</label>
                                        <input maxlength="20" type="text" class="form-control " name="rumus_jari_kanan">
                                        <small class="text-danger mt-2">Isi dengan <b>'-'</b> Jika Belum pernah scan sidik jari </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="wizard-validation-classic-step7" role="tabpanel">
                                <div class="col-xs-12 col-md-8">
                                    <h2>Lampiran</h2>
                                    <!-- KTP -->
                                    <div class="form-group">
                                        <label for="">Foto/Scan KTP</label>
                                        <div class="custom-file">
                                            <input value="" name="ktp" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            * Foto Kopi KTP Wajib Di lampiran
                                        </div>
                                    </div>

                                    <!-- Paspor -->
                                    <div class="form-group">
                                        <label for="">Foto/Scan Paspor</label>
                                        <div class="custom-file">
                                            <input value="" name="paspor" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            * Foto Kopi Paspor Wajib Di lampiran
                                        </div>
                                    </div>

                                    <!-- Kartu Keluarga -->
                                    <div class="form-group">
                                        <label for="">Foto/Scan Kartu Keluarga</label>
                                        <div class="custom-file">
                                            <input value="" name="kartu_keluarga" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            * Foto Kopi KTP Wajib Di lampiran
                                        </div>
                                    </div>

                                    <!-- Akte -->
                                    <div class="form-group">
                                        <label for="">Foto/Scan Akte</label>
                                        <div class="custom-file">
                                            <input value="" name="akte" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            * Foto Kopi Akte Wajib Di lampiran
                                        </div>
                                    </div>

                                    <!-- Sidik Jari -->
                                    <div class="form-group">
                                        <label for="">Foto/Scan Sidik Jari</label>
                                        <div class="custom-file">
                                            <input value="" name="sidik_jari" type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">
                                            * Foto Kopi Sidik Jari Wajib Di lampiran
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="tab-pane" id="wizard-validation-classic-step8" role="tabpanel">
                            <div class="col-xs-12 col-md-8">
                                <h2>Data Keterangan</h2>
                                <label for="">
                                    <h4>Informasi Lain</h4>
                                </label>
                                <div class="form-group mb-3">
                                    <label for="riwayat_pekerjaan">Riwayat Pekerjaan / negara yang pernah dikunjungi (sebutkan tahun
                                        berapa, dalam rangka apa, dan negara mana yang dikunjungi)</label>
                                    <textarea maxlength="100" required="" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan" rows="5" placeholder="Masukan Alamat Lengkap"></textarea>
                                    <div class="invalid-feedback">
                                        * Riwayat Pekerjaan Wajib Diisi
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="kegemaran">Kesenangan / Kegemaran / Hobi</label>
                                    <textarea maxlength="100" required="" name="hobi" class="form-control" id="ktp" rows="5" placeholder="Kegemaran"></textarea>
                                    <div class="invalid-feedback">
                                        * Hobi Wajib Di lampirkan
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-textarea">Alamat yang mudah dihubungi dan no. telepon</label>
                                    <textarea maxlength="100" required="" value="" name="alamat_keterangan" class="form-control" id="ktp" rows="5" placeholder="Masukan Alamat Lengkap"></textarea>
                                    <div class="invalid-feedback">
                                        * Alamat dan Telepon Wajib Diisi
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-textarea">Alamat Email</label>
                                    <input required="" value="" name="email" type="text" class="form-control" placeholder="Masukan e-mail">
                                    <div class="invalid-feedback">
                                        * Alamat e-mail Wajib Diisi
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Daftar Sekarang" class="btn btn-block btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Validation Wizard Classic -->
        </div>
    </div>

@endsection

@section('plugin-js')
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/localization/messages_id.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-validation/additional-methods.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script src="{{ url('/') }}/assets/js/creative.js"></script>
<script src="{{ url('/') }}/assets/js/jsrows.js"></script>

@endsection

@section('page-js')
<script src="{{ url('/') }}/assets/js/pages/be_forms_wizard.min.js"></script>
<script src="assets/js/pages/be_forms_plugins.min.js"></script>

<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
@endsection