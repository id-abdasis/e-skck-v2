@extends('layouts.app') @section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="block p-5">
            <div class="block-header text-center">
                <h3 class="text-center">Form Pengubahan Template</h3>
            </div>

            <div class="block-content col-md-6">
                    <form method="POST" action="{{ route('update-template') }}">
                        <input type="hidden" name="_token" value="nh9tahBmHZ964uHIe5O61wrpEak13dBC7ujJAdEY"> <input type="hidden" name="user_id" value="1">
                        <div class="form-group">
                            <label for="name">Judul Kiri Atas</label>
                            <input id="judul_kiri_atas" type="text" class="form-control " name="judul_kiri_atas" required="" autocomplete="judul_kiri_atas" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Alamat Di Judul</label>
                            <input id="alamat_di_judul" type="text" class="form-control " name="alamat_di_judul"  required="" autocomplete="judul_kiri_atas" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Atas Nama</label>
                            <input id="alamat_di_judul" type="text" class="form-control " name="atas_nama"  required="" autocomplete="atas_nama" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Satuan Kepala</label>
                            <input id="satuan_kepala" type="text" class="form-control " name="satuan_kepala" required="" autocomplete="satuan_kepala" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Pejabat</label>
                            <input id="satuan_kepala" type="text" class="form-control " name="pejabat"  required="" autocomplete="pejabat" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Jabatan</label>
                            <input id="jabatan" type="text" class="form-control " name="jabatan"  required="" autocomplete="jabatan" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Lokasi Cetak</label>
                            <input id="lokasi_cetak" type="text" class="form-control " name="lokasi_cetak"  required="" autocomplete="lokasi_cetak" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Jabatan</label>
                            <input id="masa" type="text" class="form-control " name="masa"  required="" autocomplete="masa" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">
                                Simpan Template
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection