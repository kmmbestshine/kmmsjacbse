<?php $__env->startSection('title', 'Appointment Letter'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('get.homework')); ?>">Add Class Wise Fee Structure</a></li>
        <li class="active">Appointment Letter</li>
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
               <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('documents.apt_letter.details')); ?>" > 
                
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Appointment Letter</strong></h3>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Session</label>
                                        <div class="col-md-9 ">
                                            <select class="form-control " name="session" >
                                                <option value="">Select Session</option>
                                                    <option value="<?php echo e($session); ?>"><?php echo e($session); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">stafftype</label>
                                        <div class="col-md-9 ">
                                            <select class="form-control " name="stafftype" >
                                                <option value="">Select stafftype</option>
                                                <option value="teacher">Teaching</option>
                                                <option value="user_role">Non Teaching</option>
                                                <option value="drivers">Driver</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Staff User Name</label>
                                        <div class="col-md-9 ">
                                            <!--<select class="form-control " name="staffname" >
                                                <option value="">Select Staff Name</option>
                                                <?php foreach($AllStaffs1 as $getAllStaf): ?>
                                                
                                                    <option value="<?php echo e($getAllStaf->user_id); ?>"><?php echo e($getAllStaf->name); ?></option>
                                                    <?php endforeach; ?>
                                            </select>-->
                                            <input type="text" name="username" placeholder="Ender Staff User Name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Class </label>
                                        <div class="col-md-9 ">
                                            <select class="form-control " name="class" >
                                                <option value="">Select Class</option>
                                                    <option value="<?php echo e($classes); ?>"><?php echo e($classes); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        <br/>
                            
                            <br/>
                            <br/>
                           
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-lg">Get Appointment Letter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>