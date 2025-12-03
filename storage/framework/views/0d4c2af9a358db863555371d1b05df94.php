
<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row g-4">
        
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Ringkasan Keranjang</h4>

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Ikan</th>
                                    <th class="text-end">Harga</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Subtotal</th>
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
                                                         style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px;">
                                                <?php endif; ?>
                                                <span><?php echo e($item['nama']); ?></span>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($item['qty']); ?>

                                        </td>
                                        <td class="text-end">
                                            Rp <?php echo e(number_format($item['subtotal'], 0, ',', '.')); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Total</td>
                                    <td class="text-end fw-bold">
                                        Rp <?php echo e(number_format($total, 0, ',', '.')); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        <a href="<?php echo e(route('keranjang.index')); ?>" class="btn btn-sm btn-ff-outline">
                            ← Kembali ke Keranjang
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Data Pelanggan</h4>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('checkout.process')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_pelanggan"
                                   class="form-control <?php $__errorArgs = ['nama_pelanggan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   value="<?php echo e(old('nama_pelanggan', $user->name ?? '')); ?>" required>
                            <?php $__errorArgs = ['nama_pelanggan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No. HP</label>
                            <input type="text" name="no_hp"
                                   class="form-control <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   value="<?php echo e(old('no_hp')); ?>">
                            <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Lengkap</label>
                            <textarea name="alamat" rows="3"
                                      class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Tuliskan alamat lengkap pengiriman..."><?php echo e(old('alamat')); ?></textarea>
                            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                            
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-select">
                                <option value="">-- Pilih Metode Pembayaran --</option>
                                <option value="transfer" <?php echo e(old('metode_pembayaran') == 'transfer' ? 'selected' : ''); ?>>
                                    Transfer Bank
                                </option>
                                <option value="ewallet" <?php echo e(old('metode_pembayaran') == 'ewallet' ? 'selected' : ''); ?>>
                                    E-Wallet (OVO / DANA / Gopay)
                                </option>
                                <option value="cod" <?php echo e(old('metode_pembayaran') == 'cod' ? 'selected' : ''); ?>>
                                    COD (Bayar di Tempat)
                                </option>
                            </select>
                        </div>

                        
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Kurir Pengiriman</label>
                            <select name="kurir" class="form-select">
                                <option value="">-- Pilih Kurir --</option>
                                <option value="jne" <?php echo e(old('kurir') == 'jne' ? 'selected' : ''); ?>>JNE</option>
                                <option value="jnt" <?php echo e(old('kurir') == 'jnt' ? 'selected' : ''); ?>>J&amp;T</option>
                                <option value="sicepat" <?php echo e(old('kurir') == 'sicepat' ? 'selected' : ''); ?>>SiCepat</option>
                                <option value="anteraja" <?php echo e(old('kurir') == 'anteraja' ? 'selected' : ''); ?>>AnterAja</option>
                                <option value="ambil_toko" <?php echo e(old('kurir') == 'ambil_toko' ? 'selected' : ''); ?>>
                                    Ambil di Toko
                                </option>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-primary w-100">
                            Konfirmasi &amp; Proses Pesanan
                        </button>


                       
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/checkout/index.blade.php ENDPATH**/ ?>