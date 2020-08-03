<?php $__env->startSection('content'); ?>


    <div class="container-fluid app-body settings-page">
        <h3>Recent Posts Sent to Buffer</h3>
        <div class="buffer-list">
           <recent-buffer></recent-buffer>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>