@extends('layouts.app') @section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="block p-5">
            <div class="block-header text-center">
                <h3 class="text-center">Form Pengubahan Template</h3>
            </div>

            <div class="block-content col-md-6">
                    <form method="POST" action="{{ route('template.update-template') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Judul Kiri Atas</label>
                            <input id="judul_kiri_atas" type="text" class="form-control " name="judul_kiri_atas" required="" value="{{ $template->judul_kiri_atas }}" autocomplete="judul_kiri_atas" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Alamat Di Judul</label>
                            <input value="{{ $template->alamat_dijudul }}" id="alamat_di_judul" type="text" class="form-control " name="alamat_dijudul"  required="" autocomplete="judul_kiri_atas" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Atas Nama</label>
                            <input value="{{ $template->atas_nama }}" id="alamat_di_judul" type="text" class="form-control " name="atas_nama"  required="" autocomplete="atas_nama" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Satuan Kepala</label>
                            <input value="{{ $template->satuan_kepala }}" id="satuan_kepala" type="text" class="form-control " name="satuan_kepala" required="" autocomplete="satuan_kepala" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Pejabat</label>
                            <input value="{{ $template->pejabat }}" id="satuan_kepala" type="text" class="form-control " name="pejabat"  required="" autocomplete="pejabat" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Jabatan</label>
                            <input value="{{ $template->jabatan }}" id="jabatan" type="text" class="form-control " name="jabatan"  required="" autocomplete="jabatan" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Lokasi Cetak</label>
                            <input value="{{ $template->lokasi_cetak }}" id="lokasi_cetak" type="text" class="form-control " name="lokasi_cetak"  required="" autocomplete="lokasi_cetak" autofocus="">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Masa Berlaku</label>
                            <input id="masa" value="{{ $template->masa }}" type="text" class="form-control " name="masa"  required="" autocomplete="masa" autofocus="">
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