

<?php $__env->startSection('title', 'Edit Ikan'); ?>

<?php $__env->startSection('content'); ?>
<h2 class="mb-3">Edit Data Ikan</h2>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="<?php echo e(route('admin.ikan.update', $ikan->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label class="form-label">Nama Ikan</label>
                <input type="text" name="nama" class="form-control"
                       value="<?php echo e(old('nama', $ikan->nama)); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control"
                       value="<?php echo e(old('kategori', $ikan->kategori)); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="harga" class="form-control"
                       value="<?php echo e(old('harga', $ikan->harga)); ?>" min="0" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control"
                       value="<?php echo e(old('stok', $ikan->stok)); ?>" min="0" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="form-control">
                    <?php echo e(old('deskripsi', $ikan->deskripsi)); ?>

                </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Ikan</label><br>
                <?php if($ikan->gambar): ?>
                    <img src="<?php echo e(asset('storage/' . $ikan->gambar)); ?>"
                        alt="<?php echo e($ikan->nama); ?>" width="80" class="mb-2 rounded"><br>
                <?php endif; ?>
                <input type="file" name="gambar" class="form-control">
                <div class="form-text">Biarkan kosong jika tidak ingin mengubah gambar.</div>
            </div>

            <button class="btn btn-ff-primary" type="submit">Update</button>
            <a href="<?php echo e(route('admin.ikan.index')); ?>" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/admin/ikan/edit.blade.php ENDPATH**/ ?>