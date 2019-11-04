@if (Session::has('tambah'))
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Tambahkan',
        'success'
    )
    </script>
@endif

@if (Session::has('hapus'))
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Hapus',
        'success'
    )
    </script>
@endif

@if (Session::has('hapus-pendaftar'))
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Hapus',
        'success'
    )
    </script>
@endif


@if (Session::has('update-user'))
<script>
    Swal.fire(
        'Berhasil',
        'Perubahan Data Berhasil Dilakukan',
        'success'
    )
    </script>
@endif

@if (Session::has('template-diupdate'))
<script>
    Swal.fire(
        'Berhasil',
        'Perubahan Data Berhasil Dilakukan',
        'success'
    )
    </script>
@endif