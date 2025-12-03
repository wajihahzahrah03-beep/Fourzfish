
<?php $__env->startSection('title', 'Katalog Ikan'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .katalog-header {
        background: linear-gradient(135deg,
            rgba(var(--ff-primary-rgb, 59, 130, 246), 0.1) 0%,
            rgba(var(--ff-primary-rgb, 59, 130, 246), 0.05) 100%);
        border-radius: 20px;
        padding: 2.5rem;
        margin-bottom: 2rem;
    }

    .search-card {
        background: #fff;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border: none;
    }

    .custom-input {
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 0.55rem 0.9rem;
        transition: all 0.25s ease;
        font-size: 0.95rem;
    }

    .custom-input:focus {
        border-color: var(--ff-primary);
        box-shadow: 0 0 0 3px rgba(var(--ff-primary-rgb, 59, 130, 246), 0.1);
    }

    .ikan-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.25s ease;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        height: 100%;
    }

    .ikan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    /* IMAGE */
    .ikan-card-img {
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .ikan-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .ikan-card:hover .ikan-card-img img {
        transform: scale(1.06);
    }

    /* BADGES */
    .kategori-badge,
    .stok-badge {
        position: absolute;
        font-size: 0.72rem;
        padding: 0.3rem 0.8rem;
        border-radius: 14px;
        font-weight: 600;
        box-shadow: 0 2px 6px rgba(0,0,0,0.12);
        z-index: 10;
    }

    .kategori-badge {
        background: rgba(255, 255, 255, 0.95);
        color: #047857;
        top: 0.75rem;
        left: 0.75rem;
    }

    .stok-badge {
        top: 0.75rem;
        right: 0.75rem;
        background: rgba(16, 185, 129, 0.95);
        color: #fff;
    }

    .stok-badge.habis {
        background: #ef4444;
        color: #fff;
    }

    /* TEXT */
    .ikan-name {
        font-size: 1rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.4rem;
    }

    .price-tag {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.6rem;
        color: var(--ff-primary);
    }

    /* BUTTONS */
    .btn-detail,
    .btn-cart {
        padding: 0.45rem 0.9rem;
        font-size: 0.9rem;
        border-radius: 8px;
        font-weight: 600;
    }

    .btn-cart span {
        font-size: 0.85rem;
    }

    /* PAGINATION BOOTSTRAP */
    .pagination {
        justify-content: center;
        margin-top: 1.5rem;
        gap: 0.25rem;
    }

    .page-item .page-link {
        border-radius: 999px !important;
        padding: 0.35rem 0.8rem;
        font-size: 0.9rem;
        color: #374151;
        border: 1px solid #e5e7eb;
    }

    .page-item .page-link:hover {
        background-color: rgba(var(--ff-primary-rgb, 59,130,246), 0.08);
        border-color: rgba(var(--ff-primary-rgb, 59,130,246), 0.6);
        color: var(--ff-primary);
    }

    .page-item.active .page-link {
        background-color: var(--ff-primary);
        border-color: var(--ff-primary);
        color: #fff;
    }

    .page-item.disabled .page-link {
        color: #9ca3af;
        background-color: #f9fafb;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="katalog-header">
    <h2 class="fw-bold mb-2">🐠 Katalog Ikan FourzFish</h2>
    <p class="text-muted mb-0">Temukan ikan hias impianmu dari koleksi lengkap kami</p>
</div>


<div class="search-card mb-4">
    <form method="GET" action="<?php echo e(route('katalog.index')); ?>">
        <div class="row g-3 align-items-end">
            <div class="col-md-5">
                <label class="form-label fw-semibold small text-muted">🔍 Cari Ikan</label>
                <input
                    type="text"
                    name="q"
                    class="form-control custom-input"
                    placeholder="Ketik nama ikan yang kamu cari..."
                    value="<?php echo e(request('q')); ?>"
                >
            </div>

            <div class="col-md-4">
                <label class="form-label fw-semibold small text-muted">📁 Kategori</label>
                <select name="kategori" class="form-select custom-input">
                    <option value="">Semua Kategori</option>
                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kategori); ?>" <?php echo e(request('kategori') == $kategori ? 'selected' : ''); ?>>
                            <?php echo e($kategori); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="col-md-3">
                <button type="submit" class="btn btn-cart w-100">
                    <span>Filter</span>
                </button>

                <?php if(request('q') || request('kategori')): ?>
                    <a href="<?php echo e(route('katalog.index')); ?>" class="btn btn-secondary w-100 mt-2">
                        Reset
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>


<?php if($ikans->isEmpty()): ?>
    <div class="alert alert-info border-0 rounded-4 p-4">
        <h5 class="alert-heading">🔍 Tidak ada hasil</h5>
        <p class="mb-0">Belum ada ikan yang sesuai pencarianmu.</p>
    </div>
<?php else: ?>
    <div class="row g-4">
        <?php $__currentLoopData = $ikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="ikan-card">

                    
                    <div class="ikan-card-img position-relative">
                        <?php if($ikan->gambar): ?>
                            <img src="<?php echo e(asset('storage/' . $ikan->gambar)); ?>" alt="<?php echo e($ikan->nama); ?>">
                        <?php else: ?>
                            <div class="d-flex align-items-center justify-content-center bg-light" style="height:180px;">
                                <span class="text-muted fs-4">🐟</span>
                            </div>
                        <?php endif; ?>

                        <?php if($ikan->kategori): ?>
                            <span class="kategori-badge"><?php echo e($ikan->kategori); ?></span>
                        <?php endif; ?>

                        <span class="stok-badge <?php echo e($ikan->stok <= 0 ? 'habis' : ''); ?>">
                            <?php echo e($ikan->stok > 0 ? 'Stok: '.$ikan->stok : 'Habis'); ?>

                        </span>
                    </div>

                    
                    <div class="card-body p-4">
                        <h5 class="ikan-name"><?php echo e($ikan->nama); ?></h5>

                        <div class="price-tag">
                            Rp <?php echo e(number_format($ikan->harga, 0, ',', '.')); ?>

                        </div>

                        <div class="d-flex gap-2 mt-3">
                            <a href="<?php echo e(route('katalog.show', $ikan->id)); ?>" class="btn btn-detail flex-fill">
                                Detail
                            </a>

                            <?php if(auth()->guard()->check()): ?>
                                <?php if($ikan->stok > 0): ?>
                                    <form action="<?php echo e(route('keranjang.tambah', $ikan)); ?>" method="POST" class="flex-fill">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="btn btn-cart w-100">
                                            <span>🛒</span>
                                            <span>Keranjang</span>
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <button class="btn btn-secondary flex-fill" disabled>
                                        Stok Habis
                                    </button>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if($ikan->stok > 0): ?>
                                    <a href="<?php echo e(route('login')); ?>"
                                       class="btn btn-secondary flex-fill">
                                        Login untuk beli
                                    </a>
                                <?php else: ?>
                                    <button class="btn btn-secondary flex-fill" disabled>
                                        Stok Habis
                                    </button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div> 
                </div>     
            </div>         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <?php if($ikans->hasPages()): ?>
        <div class="mt-4">
            <?php echo e($ikans->onEachSide(1)->withQueryString()->links('pagination::bootstrap-5')); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/katalog/index.blade.php ENDPATH**/ ?>