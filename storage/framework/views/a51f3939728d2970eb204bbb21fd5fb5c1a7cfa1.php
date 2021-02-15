<?php $__env->startSection('title', 'Library'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Library</li>
        <li class="active">Library</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Library</h2>
    </div>
    <?php if($msg): ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> <?php echo e($msg); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                           
                            
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('LIBRARY', $userplans)): ?>
                                <a href="<?php echo e(route('user.bookIssue.report')); ?>" class="btn btn-info btn-rounded">Book Issue Report</a>&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <?php if(in_array('LIBRARY', $userplans)): ?>
                                <a href="<?php echo e(route('user.gateentry.report')); ?>" class="btn btn-info btn-rounded">Gate Entry Report</a>&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                           <?php if(in_array('LIBRARY', $userplans)): ?>
                                <a href="<?php echo e(route('libraryReport')); ?>" class="btn btn-info btn-rounded">Library- Category Report</a>&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <?php if(in_array('LIBRARY', $userplans)): ?>
                                <a href="<?php echo e(route('librarysubjectReport')); ?>" class="btn btn-info btn-rounded">Library- Subject Report</a>&nbsp;&nbsp;&nbsp;
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrap">
                            
       
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>