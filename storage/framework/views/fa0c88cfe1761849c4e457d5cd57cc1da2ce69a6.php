<?php if(Session::has('tambah')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Tambahkan',
        'success'
    )
    </script>
<?php endif; ?>

<?php if(Session::has('hapus')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Hapus',
        'success'
    )
    </script>
<?php endif; ?>

<?php if(Session::has('hapus-pendaftar')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Data Berhasil Di Hapus',
        'success'
    )
    </script>
<?php endif; ?>


<?php if(Session::has('update-user')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Perubahan Data Berhasil Dilakukan',
        'success'
    )
    </script>
<?php endif; ?>

<?php if(Session::has('template-diupdate')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Perubahan Data Berhasil Dilakukan',
        'success'
    )
    </script>
<?php endif; ?>

<?php if(Session::has('update-pendaftar')): ?>
<script>
    Swal.fire(
        'Berhasil',
        'Perubahan Data Berhasil Dilakukan',
        'success'
    )
    </script>
<?php endif; ?><?php /**PATH C:\laragon\www\e-skck-v2\resources\views/includes/alert.blade.php ENDPATH**/ ?>