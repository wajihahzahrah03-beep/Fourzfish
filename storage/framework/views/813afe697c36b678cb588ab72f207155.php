
<?php $__env->startSection('title', 'Checkout Berhasil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card border-0 shadow-sm">
        <div class="card-body text-center py-5">
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <h3 class="fw-bold mb-3">Terima kasih! 🎉</h3>
            <p class="mb-1">
                Pesanan kamu telah berhasil dibuat.
            </p>
            <p class="mb-3">
                <strong>Kode Transaksi:</strong> <?php echo e($transaksi->kode); ?><br>
                <strong>Total:</strong> Rp <?php echo e(number_format($transaksi->total, 0, ',', '.')); ?>

            </p>

            <a href="<?php echo e(route('home')); ?>" class="btn btn-ff-primary me-2">
                Kembali ke Beranda
            </a>
            <a href="<?php echo e(route('katalog.index')); ?>" class="btn btn-ff-outline">
                Lanjut Belanja
            </a>
            <a href="<?php echo e(route('transaksi.struk', $transaksi)); ?>" class="btn btn-ff-primary me-2">
                Cetak Struk
            </a>
            <a href="<?php echo e(route('katalog.index')); ?>" class="btn btn-ff-outline">
                Lanjut Belanja
            </a>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/checkout/success.blade.php ENDPATH**/ ?>