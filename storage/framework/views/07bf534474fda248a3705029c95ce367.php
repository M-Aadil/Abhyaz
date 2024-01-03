<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Employer Section</h1>
            <h3>Please create an account</h3>
            <img src="" alt="">
        </div>

        <div class="col-md-6">
            <div class="card" id="card">
                <div class="card-header">Employer Registration</div>
                <form action="#" method="post" id="registrationForm"><?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Company Name</label>
                        <input type="text" name="name" class="form-control" required>
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" required>
                        <?php if($errors->has('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <?php if($errors->has('password')): ?>
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary" id="btnRegister">Register</button>
                    </div>

                </div>
            </form>
            </div>
            <div id="message"></div>
        </div>

    </div>
</div>
<script>
    var url = "<?php echo e(route('store.employer')); ?>";
    document.getElementById("btnRegister").addEventListener("click", function(event) {
        var form = document.getElementById("registrationForm");
        var card = document.getElementById("card");
        var messageDiv = document.getElementById('message');
        messageDiv.innerHTML = ''
        var formData = new FormData(form)

        var button = event.target
        button.disabled = true;
        button.innerHTML = 'Sending email........'

        fetch(url, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            body: formData
        }).then(response => {
            if(response.ok) {
                return response.json();
            }else {
                throw new Error('Error')
            }
        }).then(data => {
            button.innerHTML = 'Register'
            button.disabled = false
            messageDiv.innerHTML = '<div class="alert alert-success">Registration is successful. Please check your email to verify it</div>'
            card.style.display = 'none'
        }).catch(error => {
            button.innerHTML = 'Register'
            button.disabled = false
            messageDiv.innerHTML = '<div class="alert alert-danger">Something went wrong. Please try again</div>'

        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myjob\resources\views/user/employer-register.blade.php ENDPATH**/ ?>