<?php $__env->startSection('title', 'School Fee'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">School Fee</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> School Fee</h2>
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
                                <a href="<?php echo e(route('get.students.feeindex')); ?>" class="btn btn-info btn-rounded">Student Fee Structure </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('get.students.buspayments123')); ?>" class="btn btn-info btn-rounded">Bus Fee Structure </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('user.feeCollectionnewfee')); ?>" class="btn btn-info btn-rounded">Fee Collection </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrap">
                            
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                          <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('new.fee.staffcollectionreport')); ?>" class="btn btn-info btn-rounded">Overall Report</a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('term.individual.staffreportadmin')); ?>" class="btn btn-info btn-rounded">Overall Received Report </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('term.individual.staffreportbalance')); ?>" class="btn btn-info btn-rounded">Overall Bal Report </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('schoolOverall_report')); ?>" class="btn btn-info btn-rounded">School Or Bus Overall Report </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('schoolAllfee_Report')); ?>" class="btn btn-info btn-rounded">School Or Bus Received Report </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('schoolAllbalance_report')); ?>" class="btn btn-info btn-rounded">School Or Bus Bal Report </a>
                            <?php endif; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                             <?php if(in_array('FEES', $userplans)): ?>
                                <a href="<?php echo e(route('schoolDatewise_report')); ?>" class="btn btn-info btn-rounded"> DateWise Receipt Report </a>
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