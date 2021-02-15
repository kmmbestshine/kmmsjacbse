<?php $__env->startSection('title', 'Result'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Result</li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
        <?php if(\Session::has('success')): ?>
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong><?php echo \Session::get('success'); ?> </strong> 
                </div>
            </div>
        <?php endif; ?>
         <?php if(\Session::has('error')): ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong><?php echo \Session::get('error'); ?> </strong> 
                </div>
            </div>
        <?php endif; ?>
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
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('result.cred')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Delete Marks</strong></h3>
                            <div class="text-right">
                                 <a href="<?php echo e(route('addStudentsMark')); ?>" class="btn btn-info btn-rounded">Add Marks</a>
                              <!--  <a href="<?php echo e(route('addStudentsMark')); ?>" class="btn btn-info btn-rounded">Daily Add Marks</a>-->
                                &nbsp;&nbsp;&nbsp;
                               
                                <a href="<?php echo e(route('view.result')); ?>" class="btn btn-info btn-rounded">View Matric Result</a>
                              <!--  <a href="<?php echo e(route('view.hrsecresult')); ?>" class="btn btn-info btn-rounded">View Hr Sec Result</a>
                                <a href="<?php echo e(route('view.fasaresult')); ?>" class="btn btn-info btn-rounded">View FA+SA Result</a> -->
                            
                        <br>
                        <br>
                        <div class="row">
                               <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Exam Type</label>
                                            <div class="col-md-9">
                                                <select class="form-control analystExam" name="exam_type">
                                                    <option value="">Select Exam Type</option>
                                                   
                                                    <?php foreach($examtype as $type): ?>
                                                        <option value="<?php echo e($type->id); ?>"><?php echo e($type->exam_type); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php foreach($errors->get('exam_type') as $subjecterror): ?>
                                                    <div class="alert alert-danger my-alert" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button> <?php echo e($subjecterror); ?>

                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Class</label>
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
                            </div>
                            <br>
                            <br>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Section</label>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Subject</label>
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
                            </div>
                            <br>
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block"  >Get Data</button>
                                        </div>
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
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>