<?php $__env->startSection('title', 'Notifications'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Notifications</li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
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
                    <strong>Oh Snap!</strong> <?php echo e(Input::old('error')); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="page-content-wrap">
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><center>Notifications</center></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('user.notification')); ?>" class="btn btn-info btn-rounded">Send Notification</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div style="overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Notification Title</th>
                                        <th>Notification Description</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Message Type</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($notifications): ?>
                                    <?php foreach($notifications as $key => $notification): ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($notification->title); ?></td>
                                            <td><?php echo e($notification->description); ?></td>
                                            <td><?php echo e($notification->date); ?></td>
                                            <td><?php echo e($notification->role); ?></td>
                                            <td>
                                                <?php if($notification->message_type=='text_msg'): ?> Text Message <?php endif; ?>
                                                <?php if($notification->message_type=='push_msg'): ?> Push Message <?php endif; ?>
                                            </td>
                                            <td><a href="<?php echo e(route('deleteNotificationHistory', $notification->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>