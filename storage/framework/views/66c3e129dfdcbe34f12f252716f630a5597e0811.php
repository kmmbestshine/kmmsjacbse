<?php $__env->startSection('title', 'Master Forms'); ?>
    <?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
        <li class="active">Religion</li>
    </ul>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('contant'); ?>
       <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Religion</h2>
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
                        <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('post.religion')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="religion" class="form-control" placeholder="Religion">
                                </div>
                                <?php foreach($errors->get('religion') as $religion): ?>
                                    <div class="alert alert-danger"><?php echo e($religion); ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-block btn-info">Add Religion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Religions</center></h3>
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
                                        <th>Religion</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($religions as $key => $religion): ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($religion->religion); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('edit.religion', $religion->id)); ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('delete.religion', $religion->id)); ?>" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                            </td>
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