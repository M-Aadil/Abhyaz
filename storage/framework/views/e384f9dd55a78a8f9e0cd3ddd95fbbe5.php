<?php if(Session::has('successMessage')): ?>
  <div class="alert alert-success"><?php echo e(Session::get('successMessage')); ?></div>
<?php endif; ?>

<?php if(Session::has('errorMessage')): ?>
  <div class="alert alert-danger"><?php echo e(Session::get('errorMessage')); ?></div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\myjob\resources\views/message.blade.php ENDPATH**/ ?>