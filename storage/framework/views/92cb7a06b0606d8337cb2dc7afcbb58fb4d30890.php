<?php $__env->startSection('content'); ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Recent Activity</h2>
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <ul class="messages">
                        <?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholarship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <li>
                          
                          <div class="message_date">
                            <h3 class="date text-info"><?php echo e($scholarship->getDay()); ?></h3>
                            <p class="month"><?php echo e($scholarship->getMonth()); ?></p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading"><?php echo e($scholarship->name); ?></h4>
                            <blockquote class="message"><h5>You just add Scholarship Post on <?php echo e($scholarship->getDate()); ?></h5></blockquote>
                            
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="<?php echo e(route('scholarship.view', $scholarship->id)); ?>"><i class="fa fa-paperclip"></i> Read More </a>
                            </p>
                          </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </ul>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.admins.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>