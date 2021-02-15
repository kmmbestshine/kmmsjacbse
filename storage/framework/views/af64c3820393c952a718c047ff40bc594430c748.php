<?php $__env->startSection('title', 'Add Marks'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Add Marks</li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <!--  Error Message  -->
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
                   <?php /* <?php echo csrf_field(); ?>*/ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Get Class And Section</strong></h3>
                        <div class="text-right">
                            <a href="<?php echo e(route('user.result')); ?>" class="btn btn-info btn-rounded">Add Result</a>
                             &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo e(route('addStudentsMark')); ?>" class="btn btn-info btn-rounded">Refresh</a>
                        </div>
                    </div>

                    <form class="form-horizontal" action="<?php echo e(route('getStudentMarkDetails')); ?>" method="get" >
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Class</label>
                                    <div class="col-md-9 ">
                                        <select class="form-control markClass" name="class" >
                                            <option value="">Select Class</option>
                                            <?php foreach($classes as $class): ?>
                                                <option value="<?php echo e($class->id); ?>"><?php echo e($class->class); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php if($errors->get('class')): ?>
                                        <?php foreach($errors->get('class') as $clserror): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($clserror); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Section</label>
                                    <div class="col-md-9 student_section">
                                        <select class="form-control mark_section" name="section" disabled>
                                            <option value="">Select Section</option>
                                        </select>
                                        <?php if($errors->get('section')): ?>
                                        <?php foreach($errors->get('section') as $sectionerr): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($sectionerr); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Exam Type</label>
                                    <div class="col-md-9 get_exam_type">
                                        <select name="exam" class="form-control examtype" disabled >
                                            <option value="">Select Exam</option>
                                            <?php /*<?php if($exam_type): ?>
                                                <?php foreach($exam_type as $examtype): ?>
                                                    <option value="<?php echo e($examtype->id); ?>"><?php echo e($examtype->exam_type); ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>*/ ?>
                                        </select>
                                        <?php if($errors->get('exam')): ?>
                                        <?php foreach($errors->get('exam') as $examerror): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($examerror); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Teacher</label>
                                    <div class="col-md-9 teacher_result">
                                        <select class="form-control mark_teacher" name="teacher" disabled>
                                            <option value="">Select Teacher</option>
                                            <?php /*<?php if($teachers): ?>
                                                <?php foreach($teachers as $teacher): ?>
                                                    <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->name); ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>*/ ?>
                                        </select>
                                        <?php if($errors->get('teacher')): ?>
                                        <?php foreach($errors->get('teacher') as $teachers): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($teachers); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Subject</label>
                                    <div class="col-md-9 get_subject">
                                        <select name="subject" class="form-control subject" disabled>
                                            <option value="">Select Subject</option>
                                        </select>
                                        <?php if($errors->get('subject')): ?>
                                        <?php foreach($errors->get('subject') as $subjecterror): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($subjecterror); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Exam Date</label>
                                    <div class="col-md-9 ">
                                        <input type="date" name="exam_date" class="form-control">
                                        <?php if($errors->get('exam_date')): ?>
                                            <?php foreach($errors->get('exam_date') as $exam_date): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($exam_date); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select Session</label>
                                    <div class="col-md-9">
                                        <select name="atd_session" class="form-control" >
                                            <option value="">Select Session</option>
                                            <option value="am">AM</option>
                                            <option value="pm">PM</option>
                                        </select>
                                        <?php if($errors->get('atd_session')): ?>
                                        <?php foreach($errors->get('atd_session') as $atd_sessionerror): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($atd_sessionerror); ?>

                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <!-- <label class="col-md-3 control-label">Select Mark Category</label>
                                    <div class="col-md-9 ">
                                        <select class="form-control " name="markcategry" >
                                            <option value="">Select Mark Category</option>
                                            <option value="Matriculation">Matriculation</option>
                                            <option value="Higher Secondary">Higher Secondary</option>
                                            <option value="FA + SA Marks">FA + SA Marks</option>
                                        </select>
                                    </div>-->
                                    <input  name="markcategry" type="hidden" value="Matriculation"   >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <center>
                                <button type="submit" style="margin-top:20px" class="center btn btn-info">
                                   Get Student Details
                                </button>
                            </center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>