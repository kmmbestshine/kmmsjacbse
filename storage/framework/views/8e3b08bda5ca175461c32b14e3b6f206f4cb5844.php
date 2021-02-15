<?php $__env->startSection('title', 'Send Sms'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Send Sms</li>
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
        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Sms User Name</strong></h3>
                            <h3 style="float:right">
                                <a href="<?php echo e(route('user.smssend')); ?>" style="color:inherit"><span class="xn-text">Send Sms</span></a>
                                
                            </h3>
                            
                        </div>
        <div class="row">
            <div class="col-md-12">
                 <?php if(isset($smsusers)): ?>
               <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>SchoolName</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php  $i=0;  ?>        
        
        <tr>

            <td scope="row">1.</td>
            <td><?php echo e($smsusers->school_name); ?></td>
            <td><?php echo e($smsusers->username); ?></td>
            <td><?php echo e($smsusers->password); ?></td>
            <td><a  onclick="editmodal(<?php echo e($smsusers->id); ?>)">Edit</a></td>
        </tr>
        <tr id="<?php echo e($smsusers->id); ?>" style="display:none">
            <form action="<?php echo e(route('editsmsusername')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" value="<?php echo e($smsusers->id); ?>" name="userid">
                
            <td><label>Username</label><input type="text" class="form-control" name="username" value="<?php echo e($smsusers->username); ?>" readonly></td>
            <td><label>Password</label><input type="text" class="form-control" name="password" value="<?php echo e($smsusers->password); ?>"></td>
            <td><label>.</label><input type="submit" class="btn btn-success form-control" style="background-color: red !important"></td>
            </form>
        </tr>

        
    </tbody>
</table>
<?php endif; ?>
            </div>
        </div>
    </div>
  <script>
    function editmodal(id)
    {
        //alert(id);
        $("#"+id).show();

    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>