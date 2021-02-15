<?php $__env->startSection('title', 'Edit Attendance'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Employee</li>
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
                <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('update.attendance')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>Edit Attendance For <?php echo e($getclass->class); ?> - <?php echo e($getsection->section); ?> ( <?php echo e(date('A')); ?> )</strong>
                            </h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('view.attendance')); ?>" class="btn btn-info btn-rounded">View List</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div style="height: 1000px; overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Roll No</th>
                                    <?php if($holidays): ?>
                                        <th>Attendance</th>
                                    <?php else: ?>
                                        <th>Present</th>
                                        <th>Absent</th>
                                        <th>Leave</th>
                                    <?php endif; ?>

                                </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" name="attendance_session" value="<?php echo e($session); ?>" >
                                <?php foreach($students as $key => $student): ?>
                                    <tr>
                                        <td>
                                            <input type="hidden" id="studentId" name="student_id[]" value="<?php echo e($student->id); ?>" >
                                            <?php echo e($key+1); ?>

                                        </td>
                                        <td><?php echo e($student->name); ?></td>
                                        <td><?php echo e($student->roll_no); ?></td>
                                        <?php if($holidays): ?>
                                            <td>
                                                <span>H</span>
                                                <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_p_<?php echo e($student->id); ?>"
                                                       name="attendance[]" checked value="h">
                                            </td>
                                        <?php elseif($student->attendance): ?>
                                            <?php if(count($student->attendance) > 0 ): ?>
                                                <?php foreach($student->attendance as $attendance): ?>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_p_<?php echo e($student->id); ?>"
                                                       name="attendance[]" value="p" onclick="enable_check_box(this.id)" <?php if($attendance->attendance != 'A' && $attendance->attendance != 'L'): ?> checked <?php endif; ?>>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_a_<?php echo e($student->id); ?>"
                                                           name="attendance[]" value="a" onclick="enable_check_box(this.id)" <?php if($attendance->attendance == 'A'): ?> checked <?php endif; ?>>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_l_<?php echo e($student->id); ?>"
                                                           name="attendance[]" value="l" onclick="enable_check_box(this.id)" <?php if($attendance->attendance == 'L'): ?> checked <?php endif; ?> disabled>
                                                </td>
                                               <?php endforeach; ?>
                                            <?php else: ?>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_p_<?php echo e($student->id); ?>"
                                                       name="attendance[]" value="p" onclick="enable_check_box(this.id)" checked>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_a_<?php echo e($student->id); ?>"
                                                       name="attendance[]" value="a" onclick="enable_check_box(this.id)">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </td>
                                                <td>
                                                <input type="checkbox" class="student_attendance_radio_<?php echo e($student->id); ?>" id="attendance_l_<?php echo e($student->id); ?>"
                                                       name="attendance[]" value="l" onclick="enable_check_box(this.id)" disabled>
                                                </td>
                                            <?php endif; ?>
                                        <?php endif; ?>


                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" value="<?php echo e(date('Y-m-d')); ?>" readonly>
                                    <input type="hidden" name="class" value="<?php echo e($getclass->id); ?>">
                                    <input type="hidden" name="section" value="<?php echo e($getsection->id); ?>">
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-info btn-lg" id="submit" <?php if($holidays): ?> disabled <?php endif; ?>>Update Attendance</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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