<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card">
            <div class="card-header">Verify Account</div>
            <div class="card-body">
                <p>Your account is not verified. Please verify your account first. You may resend the verification email.
                    <a href="<?php echo e(route('resend.email')); ?>">Resend verification email</a>
                </p>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myjob\resources\views/user/verify.blade.php ENDPATH**/ ?>