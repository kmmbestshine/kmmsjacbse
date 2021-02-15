<?php $__env->startSection('title', 'Gallery'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Gallery</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Gallery Form</h3>
                        <div class="text-right">
                            <a href="<?php echo e(route('get.gallery')); ?>" class="btn btn-info">View Gallery</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php if(Input::old('fieldsSuccess')): ?>
                            <form class="form-horizontal dropzone" role="form" method="post" action="<?php echo e(route('post.gallery', Input::old('id'))); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="col-md-12 fallback">
                                    <input type="file" name="file" class="form-control" multiple />
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a class="btn btn-info" href="<?php echo e(route('get.gallery')); ?>">Submit</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('fields.gallery')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Event</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="header">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 text-right">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit Fields</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>