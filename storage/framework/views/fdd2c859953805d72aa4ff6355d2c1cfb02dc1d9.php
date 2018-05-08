    <?php echo $__env->make('templates.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <!-- Page Header -->
    <?php echo $__env->yieldContent('header'); ?>
    

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
        <?php echo $__env->yieldContent('content'); ?>

        </div>
      </div>
    </div>

    <?php echo $__env->make('templates.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
