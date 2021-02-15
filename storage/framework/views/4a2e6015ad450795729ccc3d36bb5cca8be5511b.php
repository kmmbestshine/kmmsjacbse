<?php $__env->startSection('title', 'Accounts'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Accounts</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Accounts</h2>
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
                                <a href="<?php echo e(route('account.add.categorys')); ?>" class="btn btn-info btn-rounded">Add Account Category </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('acc.add.income')); ?>" class="btn btn-info btn-rounded">Add New Income </a>
                            <?php endif; ?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('acc.list.income')); ?>" class="btn btn-info btn-rounded">Income List</a>
                            <?php endif; ?>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('acc.add.expense')); ?>" class="btn btn-info btn-rounded">Add New Expense </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('acc.list.expense')); ?>" class="btn btn-info btn-rounded">Expense List </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('acc.report.consolidate')); ?>" class="btn btn-info btn-rounded">Account Reports</a>
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