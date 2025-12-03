
<?php $__env->startSection('title', 'Detail Ikan'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .detail-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* ==== IMAGE ==== */
    .detail-image-wrapper {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        position: relative;
        background: #f8f9fa;
    }

    .detail-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
    }

    .detail-badge {
        position: absolute;
        top: 1.25rem;
        left: 1.25rem;
        background: rgba(255, 255, 255, 0.95);
        padding: 0.45rem 1.1rem;
        border-radius: 999px;
        font-weight: 600;
        color: var(--ff-primary);
        backdrop-filter: blur(10px);
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        font-size: 0.9rem;
    }

    /* ==== TITLE & PRICE (lebih kecil) ==== */
    .detail-header {
        margin-bottom: 1.25rem;
    }

    .detail-title {
        font-size: 2rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 0.5rem;
        line-height: 1.2;
    }

    .detail-price {
        font-size: 1.6rem;
        font-weight: 800;
        color: var(--ff-primary);
        margin: 0.75rem 0 0;
    }

    /* ==== INFO BOX ==== */
    .info-box {
        background: linear-gradient(
            135deg,
            rgba(var(--ff-primary-rgb, 59, 130, 246), 0.03) 0%,
            rgba(var(--ff-primary-rgb, 59, 130, 246), 0.08) 100%
        );
        border-radius: 16px;
        padding: 1.3rem;
        margin-bottom: 1.5rem;
    }

    .info-row {
        display: flex;
        align-items: center;
        padding: 0.7rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.04);
    }

    .info-row:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .info-label {
        font-weight: 600;
        color: #6b7280;
        width: 110px;
        display: flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.9rem;
    }

    .info-value {
        font-weight: 600;
        color: #1f2937;
        font-size: 1rem;
    }

    .stok-available,
    .stok-habis {
        display: inline-block;
        padding: 0.35rem 0.9rem;
        border-radius: 999px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .stok-available {
        background: #10b981;
        color: #fff;
    }

    .stok-habis {
        background: #ef4444;
        color: #fff;
    }

    /* ==== DESCRIPTION DI BAWAH GAMBAR ==== */
    .description-box {
        background: #fff;
        border-radius: 18px;
        padding: 1.4rem;
        box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        margin-top: 1.5rem;
        margin-bottom: 0;
    }

    .description-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.8rem;
        color: #1f2937;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .description-text {
        color: #4b5563;
        line-height: 1.7;
        font-size: 0.98rem;
    }

    /* ==== ACTION BOX ==== */
    .action-box {
        background: #fff;
        border-radius: 18px;
        padding: 1.4rem;
        box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        margin-top: 0.5rem;
    }

    .qty-selector {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
        font-size: 0.95rem;
    }

    .qty-input {
        width: 90px;
        text-align: center;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 0.55rem;
        font-weight: 600;
        font-size: 1rem;
    }

    .qty-input:focus {
        border-color: var(--ff-primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(var(--ff-primary-rgb, 59, 130, 246), 0.1);
    }

    .btn-add-cart {
        background: linear-gradient(135deg, var(--ff-primary) 0%, rgba(var(--ff-primary-rgb, 59, 130, 246), 0.8) 100%);
        border: none;
        color: #fff;
        padding: 0.9rem 1.6rem;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        box-shadow: 0 4px 12px rgba(var(--ff-primary-rgb, 59, 130, 246), 0.3);
    }

    .btn-add-cart:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(var(--ff-primary-rgb, 59, 130, 246), 0.4);
        color: #fff;
    }

    .btn-back {
        border: 2px solid #e5e7eb;
        color: #6b7280;
        padding: 0.85rem 1.6rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        width: 100%;
        justify-content: center;
        margin-top: 0.6rem;
    }

    .btn-back:hover {
        border-color: var(--ff-primary);
        color: var(--ff-primary);
        background: rgba(var(--ff-primary-rgb, 59, 130, 246), 0.05);
    }

    @media (max-width: 768px) {
        .detail-title {
            font-size: 1.6rem;
        }

        .detail-price {
            font-size: 1.4rem;
        }

        .info-box,
        .description-box,
        .action-box {
            padding: 1.1rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="detail-container">
    <div class="row g-4">
        
        <div class="col-lg-7 mb-4">
            <div class="detail-image-wrapper">
                <?php if($ikan->gambar): ?>
                    <img src="<?php echo e(asset('storage/' . $ikan->gambar)); ?>" alt="<?php echo e($ikan->nama); ?>">
                <?php else: ?>
                    <div class="d-flex align-items-center justify-content-center bg-light" style="min-height: 320px;">
                        <div class="text-center">
                            <span class="text-muted" style="font-size: 4rem;">🐟</span>
                            <p class="text-muted mt-3">Tidak ada gambar</p>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($ikan->kategori): ?>
                    <span class="detail-badge"><?php echo e($ikan->kategori); ?></span>
                <?php endif; ?>
            </div>

            
            <div class="description-box">
                <h3 class="description-title">
                    <span>📝</span>
                    <span>Deskripsi</span>
                </h3>
                <p class="description-text">
                    <?php echo e($ikan->deskripsi ?: 'Belum ada deskripsi untuk ikan ini.'); ?>

                </p>
            </div>
        </div>

        
        <div class="col-lg-5">
            <div class="detail-header">
                <h1 class="detail-title"><?php echo e($ikan->nama); ?></h1>
                <div class="detail-price">
                    Rp <?php echo e(number_format($ikan->harga, 0, ',', '.')); ?>

                </div>
            </div>

            
            <div class="info-box">
                <div class="info-row">
                    <span class="info-label">
                        <span>📁</span>
                        <span>Kategori</span>
                    </span>
                    <span class="info-value"><?php echo e($ikan->kategori ?? '-'); ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">
                        <span>📦</span>
                        <span>Stok</span>
                    </span>
                    <span class="info-value">
                        <?php if($ikan->stok > 0): ?>
                            <span class="stok-available">
                                ✓ Tersedia (<?php echo e($ikan->stok); ?> ekor)
                            </span>
                        <?php else: ?>
                            <span class="stok-habis">
                                ✕ Stok Habis
                            </span>
                        <?php endif; ?>
                    </span>
                </div>
            </div>

            
            <div class="action-box">
                <?php if(auth()->guard()->check()): ?>
                    <?php if($ikan->stok > 0): ?>
                        <form action="<?php echo e(route('keranjang.tambah', $ikan)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="qty-selector">
                                <label for="qty" class="fw-semibold text-muted">Jumlah:</label>
                                <input
                                    type="number"
                                    name="qty"
                                    id="qty"
                                    class="qty-input"
                                    value="1"
                                    min="1"
                                    max="<?php echo e($ikan->stok); ?>"
                                >
                                <span class="text-muted">/ <?php echo e($ikan->stok); ?> tersedia</span>
                            </div>
                            <button type="submit" class="btn btn-add-cart w-100 mb-3">
                                <span style="font-size: 1.25rem;">🛒</span>
                                <span>Tambah ke Keranjang</span>
                            </button>
                        </form>
                    <?php else: ?>
                        <button class="btn btn-secondary w-100 mb-3" disabled
                                style="padding: 1rem; font-weight: 600; border-radius: 12px;">
                            Stok Habis
                        </button>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($ikan->stok > 0): ?>
                        <a href="<?php echo e(route('login')); ?>"
                           class="btn btn-secondary w-100 mb-3"
                           style="padding:1rem; font-weight:600; border-radius:12px;">
                            Login untuk membeli ikan ini
                        </a>
                    <?php else: ?>
                        <button class="btn btn-secondary w-100 mb-3" disabled
                                style="padding: 1rem; font-weight: 600; border-radius: 12px;">
                            Stok Habis
                        </button>
                    <?php endif; ?>
                <?php endif; ?>

                <a href="<?php echo e(route('katalog.index')); ?>" class="btn btn-back w-100">
                    <svg width="20" height="20" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         viewBox="0 0 24 24">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    <span>Kembali ke Katalog</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/katalog/show.blade.php ENDPATH**/ ?>