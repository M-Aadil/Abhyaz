<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Looking for Job</h1>
            <h3>Please create an account</h3>
            <img src="" alt="">
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <form action="<?php echo e(route('store.seeker')); ?>" method="post"><?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Full name</label>
                        <input type="text" name="name" class="form-control">
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                        <?php if($errors->has('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                        <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>

                </div>
            </form>
            </div>
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myjob\resources\views/user/seeker-register.blade.php ENDPATH**/ ?>