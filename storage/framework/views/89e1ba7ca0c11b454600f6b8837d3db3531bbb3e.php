<?php $__env->startSection('title', 'Master Forms'); ?>
    <?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
        <li class="active">Session</li>
    </ul>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('contant'); ?>
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Session</h2>
        </div>
        <?php if(Input::old('success')): ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> <?php echo e(Input::old('success')); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(Input::old('error')): ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> <?php echo e(Input::old('error')); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="page-content-wrap">
           <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('post.session')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Session</label>
                                    <input type="text" name="session" class="form-control" placeholder="Session">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <input type="date" name="fromDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" name="toDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <label></label>
                                <button type="submit" class="btn btn-block btn-info">Add Session</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Sessions</center></h3>
                            <ul class="panel-controls">
                                <li>
                                    <a href="#" class="panel-collapse">
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-refresh">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-remove">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Session</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Activate/Deactivate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sessions as $key => $session): ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($session->session); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('edit.session', $session->id)); ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('delete.session', $session->id)); ?>" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
                                             <?php /* updated 6-11-2017 by priya
                                            <td>
                                                <?php if($session->active==1): ?>
                                                    <a href="<?php echo e(route('operate.session', $session->id)); ?>" class="btn btn-success">Deactivate</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('operate.session', $session->id)); ?>" class="btn btn-warning">Activate</a>
                                                <?php endif; ?>
                                            </td>*/ ?>
                                            <?php if($session->active==1): ?>
                                                <td>
                                                    <a href="<?php echo e(route('operate.session', $session->id)); ?>" style="background-color: green" class="btn btn-success" >
                                                        Active
                                                    </a>
                                                </td>
                                            <?php else: ?>
                                                <td>
                                                    <a href="<?php echo e(route('operate.session', $session->id)); ?>" class="btn btn-warning">
                                                        Deactive
                                                    </a>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>