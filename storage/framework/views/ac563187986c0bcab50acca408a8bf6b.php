<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
               <?php echo $__env->make('message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card shadow-lg">
                    <div class="card-header">Login</div>
                    <form action="<?php echo e(route('login.post')); ?>" method="post"><?php echo csrf_field(); ?>
                        <div class="card-body">

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
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myjob\resources\views/user/login.blade.php ENDPATH**/ ?>