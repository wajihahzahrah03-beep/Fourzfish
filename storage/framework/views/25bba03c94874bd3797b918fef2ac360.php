
<?php $__env->startSection('title', 'Keranjang Belanja'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Keranjang Belanja</h2>
            <p class="text-muted mb-0">Cek kembali ikan yang akan kamu beli.</p>
        </div>

        <?php if(!empty($cart)): ?>
            <form action="<?php echo e(route('keranjang.clear')); ?>" method="POST"
                  onsubmit="return confirm('Yakin ingin mengosongkan keranjang?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    Kosongkan Keranjang
                </button>
            </form>
        <?php endif; ?>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success mb-3">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger mb-3">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php if(empty($cart)): ?>
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <p class="mb-3">Keranjang kamu masih kosong.</p>
                <a href="<?php echo e(route('katalog.index')); ?>" class="btn btn-ff-primary">
                    Cari Ikan Hias
                </a>
            </div>
        </div>
    <?php else: ?>
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Ikan</th>
                            <th class="text-end">Harga</th>
                            <th class="text-center" style="width: 160px;">Jumlah</th>
                            <th class="text-end">Subtotal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <?php if(!empty($item['gambar'])): ?>
                                            <img src="<?php echo e(asset('storage/' . $item['gambar'])); ?>"
                                                 alt="<?php echo e($item['nama']); ?>"
                                                 style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                        <?php endif; ?>
                                        <div>
                                            <div class="fw-semibold"><?php echo e($item['nama']); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?>

                                </td>
                                <td class="text-center">
                                    <form action="<?php echo e(route('keranjang.update', $item['id'])); ?>" method="POST" class="d-inline-flex gap-2 justify-content-center">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <input type="number" name="qty" value="<?php echo e($item['qty']); ?>"
                                               min="0" class="form-control form-control-sm" style="width: 70px;">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">
                                            Update
                                        </button>
                                    </form>
                                </td>
                                <td class="text-end">
                                    Rp <?php echo e(number_format($item['subtotal'], 0, ',', '.')); ?>

                                </td>
                                <td class="text-center">
                                    <form action="<?php echo e(route('keranjang.hapus', $item['id'])); ?>" method="POST"
                                          onsubmit="return confirm('Hapus ikan ini dari keranjang?')" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="3" class="text-end fw-bold">Total</td>
                            <td class="text-end fw-bold">
                                Rp <?php echo e(number_format($total, 0, ',', '.')); ?>

                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-end">
            <a href="<?php echo e(route('checkout.index')); ?>" class="btn btn-lg btn-ff-primary">
                Checkout
            </a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/keranjang/index.blade.php ENDPATH**/ ?>