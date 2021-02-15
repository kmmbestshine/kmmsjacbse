<?php $__env->startSection('title', 'View Result'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">View Result</li>
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
                <form class="form-horizontal" role="form" method="get">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Get Class And Section</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('user.result')); ?>" class="btn btn-info btn-rounded">Add Result</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control class" name="class" required>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12 section">
                                            <select class="form-control sel-section" name="section" disabled>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="exam" class="form-control" required>
                                                <option value="">Select Exam</option>
                                                <?php if($examtypes): ?>
                                                <?php foreach($examtypes as $examtype): ?>
                                                    <option value="<?php echo e($examtype->id); ?>"><?php echo e($examtype->exam_type); ?></option>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-block">Get Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if( $students): ?>
                    <?php if($students!='intializing'): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>View Result of Class <?php echo e($classData->class); ?> of Section <?php echo e($sectionData->section); ?> of <?php echo e($examData->exam_type); ?> Exam</strong></h3>
                            <div class="text-right">
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderd datatable">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Roll No</th>
                                        <th>Date</th>
                                        <th>Marks</th>
                                       <!--  <th>Result</th> -->
                                       <!--  <th>Remarks</th> -->
                                       <!--  <th>Download</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($students as $key => $result): ?>
                                    
                                        <tr>
                                            <td><?php echo e($result->name); ?></td>
                                            <td><?php echo e($result->roll_no); ?></td>
                                            <td><?php echo e($result->date); ?></td>
                                            <td><table class="table table-borderd table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Subject</th>
                                                            <th>Max</th>
                                                            <th>Pass</th>
                                                            <th>Ob.Marks</th>
                                                            <th>Grade</th>
                                                            <th>Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if($result->result): ?>
                                                            <?php foreach($result->result as $rel): ?>

                                                                <tr>
                                                                    <td><?php echo e($rel->subject); ?></td>
                                                                    <td><?php echo e($rel->max_marks); ?></td>
                                                                    <td><?php echo e($rel->pass_marks); ?></td>
                                                                    <td><?php echo e($rel->obtained_marks); ?></td>
                                                                    <td><?php echo e($rel->grade); ?></td>
                                                                    <td><?php echo e($rel->result); ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td><?php echo e($result->max_total); ?></td>
                                                            <td><?php echo e($result->pass_totol); ?></td>
                                                            <td><?php echo e($result->totalObtain); ?></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <!-- <td><?php echo e($result->result[0]->result); ?></td>
                                            <td><?php echo e($result->result_remarks); ?></td> -->
                                            
                                            <td><a href="<?php echo e(route('resultDownload', [$class_id, $section, $exam, $result->id ])); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Download</a></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table> 
                        </div>

                    </div>

                    <?php else: ?>
                        <h2 class="text-success"><center>Select Class, Section and Exam Type</center></h2>  
                    <?php endif; ?>
                <?php else: ?>
                    <h2><center>No Data Found!!!</center></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>