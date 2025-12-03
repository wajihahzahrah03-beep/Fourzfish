

<?php $__env->startSection('title', 'Profil Saya'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .profile-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        padding: 2rem;
        max-width: 650px;
        margin: auto;
    }

    .profile-header {
        font-size: 1.8rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
    }

    .profile-label {
        font-weight: 600;
        color: #6b7280;
    }

    .profile-input {
        border-radius: 12px;
        padding: 0.75rem;
        border: 2px solid #e5e7eb;
        transition: 0.2s;
    }

    .profile-input:focus {
        border-color: var(--ff-primary);
        box-shadow: 0 0 0 3px rgba(6,143,143,0.15);
    }

    .btn-save {
        background: #068f8f;
        color: white;
        padding: 0.8rem;
        border-radius: 12px;
        font-weight: 600;
        width: 100%;
        transition: 0.25s;
    }

    .btn-save:hover {
        background: #056f6f;
        color: white;
        transform: translateY(-2px);
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="profile-card">

    <div class="profile-header">Profil Saya</div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success rounded-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('profile.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        
        <div class="mb-3">
            <label class="profile-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control profile-input"
                   value="<?php echo e(old('name', $user->name)); ?>" required>
        </div>

        
        <div class="mb-3">
            <label class="profile-label">Email</label>
            <input type="email" name="email" class="form-control profile-input"
                   value="<?php echo e(old('email', $user->email)); ?>" required>
        </div>

        
        <?php if(isset($user->username)): ?>
        <div class="mb-3">
            <label class="profile-label">Username</label>
            <input type="text" class="form-control profile-input" value="<?php echo e($user->username); ?>" disabled>
        </div>
        <?php endif; ?>

        <button class="btn-save mt-3">
            Simpan Perubahan
        </button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/profile/index.blade.php ENDPATH**/ ?>