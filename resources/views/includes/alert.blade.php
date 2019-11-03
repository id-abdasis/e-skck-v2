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