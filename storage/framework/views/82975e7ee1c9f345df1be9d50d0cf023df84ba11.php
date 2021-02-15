<?php $__env->startSection('title', 'Add Attendance'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
        <li class="active">Attendance</li>
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
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('post.cred')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Add Student Attendance</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('view.attendance')); ?>" class="btn btn-info btn-rounded">View Today's Attendance</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control attenclass" name="class">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12 mainsection">
                                            <select class="form-control attensection" name="section" disabled>
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
        <?php if($getclass): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Add Attendance For <?php echo e($getclass->class); ?> - <?php echo e($getsection->section); ?> ( <?php echo e(date('A')); ?> ) </strong>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('post.attendance')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                        <div style="height: 1000px; overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th># </th>
                                <th>Student Name </th>
                                <th>Roll No</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <!-- <th>Leave</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <input type="hidden" name="attendance_session" value="<?php echo e(date('a')); ?>" >
                            <?php foreach($students as $key => $student ): ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td>
                                    <input type="hidden" id="studentId" name="student_id[]" value="<?php echo e($student->id); ?>" >
                                    <?php echo e($student->name); ?>

                                </td>
                                <td><?php echo e($student->roll_no); ?></td>
                                <td>
                                    <span>P</span>
                                        <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_p_<?php echo e($student->id); ?>"
                                               name="attendance[]" value="p" onclick="enable_check_box(this.id)" checked>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                                <td>
                                    <span>A</span>
                                        <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_a_<?php echo e($student->id); ?>"
                                               name="attendance[]" value="a" onclick="enable_check_box(this.id)">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                                <!-- <td>
                                    <span>L</span>
                                        <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_l_<?php echo e($student->id); ?>"
                                               name="attendance[]" value="l" onclick="enable_check_box(this.id)">
                                </td> -->
                            </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!--<input type="date" class="form-control" name="date" value="<?php echo e(date('Y-m-d')); ?>" readonly>-->
                                <input type="date" class="form-control" name="date" value="<?php echo e(date('Y-m-d')); ?>" >
                                <input type="hidden" name="class" value="<?php echo e($getclass->id); ?>">
                                <input type="hidden" name="section" value="<?php echo e($getsection->id); ?>">
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-info btn-lg" id="submit">
                                Add Attendance
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <p>
            <h3>
                <center>No datas Found!!!</center>
            </h3>
            </p>
        <?php endif; ?>
    </div>
    <script>
        function enable_check_box(id)
        {
            var student = id.split("_");
            var student_id = student[2];
            $(".student_attendance_radio_"+student_id).change(function()
            {
                $('.student_attendance_radio_'+student_id).not(this).prop('checked',false);
            });
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>