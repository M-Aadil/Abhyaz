<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abhyaz Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">Abhyaz Careers</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
            <?php if(!Auth::check()): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('create.seeker')); ?>">Job Seeker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('create.employer')); ?>" >Employer</a>
              </li>
              <?php endif; ?>
            <?php if(Auth::check()): ?>
              <li class="nav-item">
                <a class="nav-link" id="logout" href="#">Logout</a>
              </li>
              <?php endif; ?>
              <form id="form-logout" action="<?php echo e(route('logout')); ?>" method="post"><?php echo csrf_field(); ?></form>
            </ul>
          </div>
        </div>
      </nav>
      <?php echo $__env->yieldContent('content'); ?>

      <script>
        let logout = document.getElementById('logout');
        let form = document.getElementById('form-logout');
        logout.addEventListener('click', function() {
            form.submit();
        })
      </script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\myjob\resources\views/layouts/app.blade.php ENDPATH**/ ?>