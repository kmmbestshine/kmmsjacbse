<?php $__env->startSection('title', 'Add Homework'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Homework</li>
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
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('post.homework')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Homework</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('get.homework')); ?>" class="btn btn-info btn-rounded">View Today's Homework</a>
                                <a href="<?php echo e(route('user.smssend')); ?>" class="btn btn-info btn-rounded">Text Sms Homework</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Class</label>
                                        <div class="col-md-9">
                                            <select class="form-control workclass" name="class">
                                                <option value="">Select Class</option>
                                                <?php foreach($classes as $class): ?>
                                                    <option value="<?php echo e($class->id); ?>"><?php echo e($class->class); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php foreach($errors->get('class') as $clserror): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($clserror); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Section</label>
                                        <div class="col-md-9 worksection">
                                            <select class="form-control homesection" name="section" disabled>
                                                <option value="">Select Section</option>
                                            </select>
                                            <?php foreach($errors->get('section') as $sectionerr): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($sectionerr); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Select Subject</label>
                                        <div class="col-md-9 worksubject">
                                            <select class="form-control subject" name="subject" disabled>
                                                <option value="">Select Subject</option>
                                            </select>
                                            <?php foreach($errors->get('subject') as $subjecterr): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($subjecterr); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                           <textarea class="form-control" name="description" placeholder="Decription"></textarea>
                                            <?php foreach($errors->get('description') as $description): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($description); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-9">
                                           <input type="file" name="image" class="form-control">
                                            <?php foreach($errors->get('image') as $image): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($image); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                           <input type="date" name="date" class="form-control">
                                            <?php foreach($errors->get('date') as $date): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($date); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <!--<div class="form-group">
                                        <label class="col-md-3 control-label">PDF File</label>
                                        <div class="col-md-9">
                                           <input type="file" name="pdf" class="form-control">
                                            <?php foreach($errors->get('pdf') as $pdf): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($pdf); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div> phase 2 by siva -->
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-info btn-lg">Add Homework</button>
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