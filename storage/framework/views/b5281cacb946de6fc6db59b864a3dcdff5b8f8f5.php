<?php $__env->startSection('title', 'HR Documents'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">HR Documents</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> HR Documents</h2>
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
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.attend_certify')); ?>" class="btn btn-info btn-rounded">Attendance Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.bonafied')); ?>" class="btn btn-info btn-rounded">Bonafied Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.conduct')); ?>" class="btn btn-info btn-rounded">Conduct Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.feepaid')); ?>" class="btn btn-info btn-rounded">Fee Paid Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.tobe_feepaid')); ?>" class="btn btn-info btn-rounded">Fee To be Paid Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                         <!--   <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.attend_certify')); ?>" class="btn btn-info btn-rounded">Attendance Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.bonafied')); ?>" class="btn btn-info btn-rounded">Bonafied Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.conduct')); ?>" class="btn btn-info btn-rounded">Conduct Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.feepaid')); ?>" class="btn btn-info btn-rounded">Fee Paid Certificate </a>
                            <?php endif; ?>-->
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.documents.10-pass')); ?>" class="btn btn-info btn-rounded">10th Class Passing Certificate </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>