<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('templates.adminPartials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                <?php echo csrf_field(); ?>
              <h1>Login As Admin</h1>
              <div>
                <input id="email" type="email" placeholder="Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                <input id="password" type="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                
                
                <button type="submit" class="btn btn-default submit">
                    <?php echo e(__('Login')); ?>

                </button>
                <a class="reset_pass" href="<?php echo e(route('password.request')); ?>">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator"></div>
            </form>
          </section>
        </div>

     
      </div>
    </div>
  </body>

</html>
