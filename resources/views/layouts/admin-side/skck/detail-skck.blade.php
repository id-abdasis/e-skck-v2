@extends('layouts.app') @section('main-content')
<div class="row">
    <div class="col-md-3">
        <div class="block block-rounded text-center">
            <div class="block-content block-content-full">
                <img class="img-avatar" src="{{ url('/') }}/assets/media/avatars/default-image.png" alt=""
                    draggable="true" data-bukket-ext-bukket-draggable="true">
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">{{ $biodata->nama_lengkap_pendaftar }}</div>
                <div class="font-size-sm text-muted">{{ $biodata->jenis_kelamin_pendaftar }}</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-danger" href="javascript:void(0)">
                    <i class="fa fa-trash mr-5"></i>Hapus
                </a>
                <a class="btn btn-rounded btn-alt-secondary" href="{{ route('sunting-pendaftar', $biodata->id) }}">
                    <i class="fa fa-pencil mr-5"></i>Sunting
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="block">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#btabs-animated-slideleft-home">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#btabs-animated-slideleft-profile">Tindakan Kriminal</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="#btabs-animated-slideleft-settings"><i class="si si-settings"></i></a>
                </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
                <div class="tab-pane fade fade-left show active" id="btabs-animated-slideleft-home" role="tabpanel">
                    <div class="text-left m-5">
                        <p class="text-muted mb-2 font-13"><b>Nama Lengkap :</b> <span
                                class="ml-2">{{ $biodata->nama_lengkap_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Jenis Kelamin :</b> <span
                                class="ml-2">{{ $biodata->jenis_kelamin_pendaftar }}</span></p>
                        <p class="text-muted mb-1 font-13"><b>Tempat Tanggal Lahir :</b> <span
                                class="ml-2">{{ $biodata->tempat_lahir_pendaftar }},
                                {{ $biodata->tanggal_lahir_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Status Perkawinan :</b> <span
                                class="ml-2">{{ $biodata->status_perkawinan_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Kewarganegaraan :</b> <span
                                class="ml-2">{{ $biodata->kewarganegaraan_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Agama :</b> <span
                                class="ml-2">{{ $biodata->agama_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Pekerjaan :</b> <span
                                class="ml-2">{{ $biodata->pekerjaan_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Kota :</b> <span
                                class="ml-2">{{ preg_replace('/\d/', '', $biodata->kabupaten_pendaftar) }}</span>
                        </p>
                        <p class="text-muted mb-2 font-13"><b>Kecamatan :</b> <span
                                class="ml-2">{{ preg_replace('/\d/', '', $biodata->kecamatan_pendaftar) }}</span>
                        </p>
                        <p class="text-muted mb-2 font-13"><b>Kelurahan :</b> <span
                                class="ml-2">{{ preg_replace('/\d/', '', $biodata->kelurahan_pendaftar) }}</span>
                        </p>
                        <p class="text-muted mb-2 font-13"><b>Alamat Lengkap :</b> <span
                                class="ml-2">{{ $biodata->alamat_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Jenis ID :</b> <span
                                class="ml-2">{{ $biodata->jenis_identitas_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>No. ID :</b> <span
                                class="ml-2">{{ $biodata->nomor_identitas_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>PASPOR :</b> <span
                                class="ml-2">{{ $biodata->nomor_paspor_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Tangagl Daftar :</b> <span
                                class="ml-2">{{ $biodata->created_at }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>No. Telepon :</b><span
                                class="ml-2">{{ $biodata->telepon_pendaftar }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Email :</b> <span
                                class="ml-2 ">{{ $biodata->keterangan['email'] }}</span></p>
                    </div>
                </div>
                <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-profile" role="tabpanel">
                    <h6 class="uppercase-text"><i class="fa fa-sticky-note mr-1"></i>Pidana</h6>
                    <div class="text-left mt-3">
                        <p class="text-muted mb-2 font-13"><b>Pidana :</b> <span class="ml-2">{{ $biodata->pidana['perkara_pidana'] }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Perkara :</b> <span class="ml-2">{{ $biodata->pidana['perkara'] }}</span></p>
                        <p class="text-muted mb-1 font-13"><b>Vonis :</b> <span class="ml-2">{{ $biodata->pidana['vonis'] }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Kasus :</b> <span class="ml-2">{{ $biodata->pidana['proses_perkara'] }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Hukum Pidana :</b> <span class="ml-2">{{ $biodata->pidana['hukuman'] }}</span></p>
                    </div>
                    <hr>
                    <h6 class="uppercase-text"><i class="fa fa-sticky-note mr-1"></i>Pelanggaran</h6>
                    <div class="text-left mt-3 pb-5">
                        <p class="text-muted mb-2 font-13"><b>Pelanggaran :</b> <span class="ml-2">{{ $biodata->pidana['perkara_pelanggaran'] }}</span></p>
                        <p class="text-muted mb-2 font-13"><b>Jenis Pelanggaran :</b> <span class="ml-2">{{ $biodata->pidana['jenis_pelanggaran'] }}</span></p>
                        <p class="text-muted mb-1 font-13"><b>Hukum Pelanggaran :</b> <span class="ml-2">{{ $biodata->pidana['proses_pelanggaran'] }}</span></p>

                    </div>
                </div>
                <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-settings" role="tabpanel">
                    <h4 class="font-w400">Settings Content</h4>
                    <p>Content slides in to the left..</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
