<?php $__env->startSection('title', 'Library'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
        <li class="active">Return Book</li>
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
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('return.book.post')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Return Book</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('user.library.index')); ?>" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Acc No</label>
                                        <div class="col-md-9">
                                            <input type="text" name="book_no" class="form-control" id="book_no">
                                            <?php foreach($errors->get('book_no') as $book_no): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($book_no); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info" id="getBook">Get Book Info</button>
                                </div>
                            </div>
                            <br/>
                            <div class="row" id="BookLayout">
                                <div class="col-md-12"></div>

                            </div>
                        <!-- <a href="<?php echo e(route('fineReceipt', $id)); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Download</a> -->
                            <br/>

                            <!-------  Updated 14-10-2017 by priya   --------->

                            <div class="mainheader" style="display:none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php /* updated 14-10-2017 by priya
                                            <label class="col-md-3 control-label">User</label>*/ ?>
                                            <label class="col-md-3 control-label">Returned From</label>
                                            <div class="col-md-9">
                                                <select name="user_role" class="form-control" id="user_role">
                                                    <option value="">Select Role</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Teacher">Teacher</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="childdivstudent" style="display:none">
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
                                            <button type="button" class="btn btn-info" id="getStudentReturn">Get Student Info</button>
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="row" id="StudentLayoutInReturn">
                                        <div class="col-md-12"></div>
                                    </div>
                                </div>
                                <br/>
                                <div class="childdivteacher" style="display:none">
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
                                            <button type="button" class="btn btn-info" id="getTeacherReturn">Get Teacher Info</button>
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="row" id="TeacherLayoutInReturn">
                                        <div class="col-md-12"></div>
                                    </div>
                                </div>
                                </br>

                            </div>


                            <!------   End  ---------->


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-offset-3 col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="bookrel" value="submit">Return
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="bookrel" value="reissue">Re-Issue
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row" id="reissue_data_box">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Issue Date</label>
                                        <div class="col-md-9">
                                            <input type="text" name="issue_date" class="form-control" value="<?php echo e(date('d-M-Y')); ?>" readonly>
                                            <?php foreach($errors->get('issue_date') as $issue_date): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($issue_date); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Return date</label>
                                        <div class="col-md-9">
                                            <input type="date" name="return_date" class="form-control">
                                            <?php foreach($errors->get('return_date') as $return_date): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($return_date); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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