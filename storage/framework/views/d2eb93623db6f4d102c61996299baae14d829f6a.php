<?php $__env->startSection('main-content'); ?>
<?php if(Session::has('pendaftaran-sukses')): ?>
<div class="row justify-content-center alert alert-success alert-dismissable">
    <div class="col-md-6">
        <h1 class="text-center"><i class="fa fa-check-square-o mr-2"></i>Pendaftaran Berhasil</h1>
        <p class="text-center">Terimakasih telah melakukan pendaftaran SKCK dengan media daring, silahkan cek email anda untuk melihat detail pendaftaran yang sudah berhasil di lakukan</p>
    </div>
</div>
<?php else: ?>
<div class="row justify-content-center alert alert-danger alert-dismissable">
    <div class="col-md-6">
        <h1 class="text-center"><i class="fa fa-check-square-o mr-2"></i>Halaman tidak di temukan</h1>
        <p class="text-center">Maaf halaman yang anda tuju tidak di temukan</p>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\e-skck-v2\resources\views/layouts/client-side/notif.blade.php ENDPATH**/ ?>