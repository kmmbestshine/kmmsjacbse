<?php $__env->startSection('title', 'Gate Register'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
        <li class="active">Gate Register</li>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Gate In Time Register</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('user.register.libout')); ?>" class="btn btn-info btn-rounded">OUT TIME REGISTER</a>&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo e(route('user.library.index')); ?>" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="mainheader" >
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Choose User Type</label>
                                                <div class="col-md-9">
                                                   <div>
                                                    <select>
                                                        <option>Choose User</option>
                                                        
                                                        <option value="green">Student</option>
                                                        <option value="blue">Staff</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <br/>
                                
                            
                            <div class="green box">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('gate.inregister.post')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Barcode/Admission No</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="registration_no" class="form-control" id="RegNoInLibrary">
                                                    <?php foreach($errors->get('registration_no') as $registration_no): ?>
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> <?php echo e($registration_no); ?>

                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="entering" class="form-control" value = 'INTIME'>
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                            
                                        </div>
                                    </div>
                                </form>
                                    <br/>
                            </div>
                            <div class="blue box">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('gate.inregister.post')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Barcode/Username</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="user_name" class="form-control" id="username">
                                                    <?php foreach($errors->get('user_name') as $username): ?>
                                                        <div class="alert alert-danger my-alert" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button> <?php echo e($username); ?>

                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="entering" class="form-control" value = 'INTIME'>
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                            </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>