<?php $__env->startSection('title', 'Payroll Report'); ?>
    <?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
        <li class="active">Payroll</li>
    </ul>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('contant'); ?>
        <?php if(Input::old('success')): ?>
            <br>
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
            <br>
        <?php endif; ?>
        <?php if(Input::old('error')): ?>
            <br>
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
            <br>
        <?php endif; ?>
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>Payroll For Employee</strong>
                            </h3>
                            <div class="text-right">
                               <?php /* <a href="<?php echo e(route('getTeacherAttendance')); ?>" class="btn btn-info btn-rounded">Add Employee Attendance</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo e(route('viewMonthlyReport')); ?>" class="btn btn-info btn-rounded">Employee's Daily Report</a>
                                &nbsp;&nbsp;&nbsp;
                                */ ?><!-- <a href="<?php echo e(route('add_bonus_payroll')); ?>" class="btn btn-info btn-rounded">Add Overtime</a>
                                &nbsp;&nbsp;&nbsp; -->
                                <a href="<?php echo e(route('get_deduction')); ?>" class="btn btn-info btn-rounded">Add Deduction</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo e(route('add_professional_tax')); ?>" class="btn btn-info btn-rounded">Add Professional Tax</a>
                                &nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#newPayroll">Add Payroll</button>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo e(route('add_allowed_leave')); ?>" class="btn btn-info btn-rounded">Add Allowed Leave</a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal" >
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control" name="payroll_month">
                                            <option value="">Select Month</option>
                                            <?php foreach($getMonth as $month): ?>
                                                <option value="<?php echo e($month->id); ?>"><?php echo e($month->month); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php foreach($errors->get('payroll_month') as $pmonth): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($pmonth); ?>

                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control " name="payroll_year">
                                            <option value="">Select Year</option>
                                            <?php for($i=0;$i<100;$i++): ?>
                                                <option value="<?php echo e(2000+$i); ?>"><?php echo e(2000+$i); ?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <?php foreach($errors->get('payroll_year') as $pyear): ?>
                                            <div class="alert alert-danger my-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button> <?php echo e($pyear); ?>

                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-3 pull-right">
                                        <center>
                                            <button type="submit" name="submit_payroll"
                                                    value="payroll" class="btn btn-info">
                                                <i class="fa fa-floppy-o fa-left"></i>
                                                Get Payroll Report
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal fade" id="newPayroll" role="dialog">
                            <div class="modal-dialog modal-lg">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">New payroll entry</h4>
                                    </div>

                                    <div class="modal-body">

                                        <form class="form" role="form" method="POST" action="<?php echo e(route('add_new_payroll')); ?>">
                                            <?php echo csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group payroll_payment_day">
                                                        <label class="control-labe">Payment day <small>(required)</small></label>
                                                        <input type="date" id="payday" class="form-control payment_day" name="pay_day"  required="" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-labe">Payment ID</label>
                                                        <input type="text" class="form-control" name="payroll_id" value="<?php echo e($lastInsertedID); ?>" disabled="disabled">
                                                        <input type="hidden" class="form-control" name="payroll_id" value="<?php echo e($lastInsertedID); ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group payroll_teacher_class" >
                                                        <label class="control-label">Select Employee <small>(required)</small></label>
                                                        <select name="employee_id" class="form-control custom-select mb-2 mr-sm-2 mb-sm-0 payroll_teacher" disabled>
                                                            <option value="">Please Choose One</option>
                                                            <?php /*<?php foreach($getTeachers as $teacher): ?>
                                                                <option value="<?php echo e($teacher->id); ?>"><?php echo e(ucwords($teacher->name)); ?></option>
                                                            <?php endforeach; ?>*/ ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Basic amount <small>(required)</small></label>
                                                        <input type="text" class="form-control basic_payroll_salary"  required="">
                                                        <input type="hidden" class="form-control basic_salary" name="basic" >
                                                        <?php /*<input type="text" pattern="\d+(\.\d{2})?" class="form-control basic_payroll_salary" name="basic" required="">
                                                    */ ?>
                                                        <div class="displayEmployeeSalary"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Allowance</label>
                                                        <input type="text" class="form-control payroll_allowance" name="allowance"
                                                               onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group payment_bonus_value">
                                                        <label class="control-labe">HRA</label>
                                                        <input type="text"  class="form-control payroll_bonus" name="bonus"
                                                               onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Prof Tax</label>
                                                        <input type="text"  class="form-control payroll_tax" >
                                                        <input type="hidden"  class="form-control payroll_tax_amount" name="tax" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group ">
                                                        <label class="control-labe">Deductions</label>
                                                        <input type="text"  class="form-control payroll_deductions">
                                                        <input type="hidden"  class="form-control payroll_deductions_amount" name="deduction" >
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <div class="form-group pull-right">
                                                    <input type="hidden" name="total_leave" class="form-control total_leave_days">
                                                    <input type="hidden" name="allowed_leave" class="form-control total_allowed_leave">
                                                    <input type="hidden" name="worked_days" class="form-control total_worked_days">
                                                    <input type="hidden" name="gross_value" class="form-control payroll_gross">
                                                    <button type="submit" class="btn btn-primary" name="add_new_payroll" value="new_payroll">Create</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($getPayrollDetail): ?>
                <?php if(count($getPayrollDetail)>0): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>
                                    <?php foreach($getPayrollDetail as $row1 =>$payment): ?>
                                    <?php endforeach; ?>
                                    <?php
                                    $payroll_month = $payment->pay_month;
                                    $payroll_year = $payment->year;
                                    ?>
                                    <?php if($getMonthName): ?>
                                        View Payroll Report For " <?php echo e(ucwords($getMonthName->month)); ?> - <?php echo e($payment->year); ?> "
                                   <?php else: ?>
                                         View All Month Payroll List
                                     <?php endif; ?>
                                </strong>
                            </h3>
 <div class="text-right">
     <a href="<?php echo e(route('downloadEmployeeReport')); ?>" class="btn btn-info btn-rounded">
         <i class="fa fa-download fa-left" aria-hidden="true"></i>    Export
     </a>
 </div>
</div>
<div class="panel-body">
 <div class="table-responsive">
     <table class="table datatable">
         <thead>
         <tr>
             <th>S.No</th>
             <th>Employee Name </th>
             <th>Employee Id</th>
             <th>Department</th>
             <th>Total Days of Month</th>
             <th>Allowed Leave</th>
             <th>Leave Taken</th>
             <?php /*<th>Working Days</th>*/ ?>
             <th>Worked Days</th>
             <th>Basic </th>
            <!--  <th>OverTime </th> -->
             <th>Allowance </th>
             <th>HRA</th>
             <th>Gross</th>
             <th>Prof Tax</th>
             <th>Deduction</th>
             <th>CTC</th>
             <th>View</th>
            <?php /* <th>Edit</th>*/ ?>
             <?php /*<th>Delete</th>*/ ?>
         </tr>
         </thead>
         <tbody>

         <?php foreach($getPayrollDetail as $key =>$payroll): ?>
             <tr>
                 <td><?php echo e($key+1); ?></td>
                 <td><?php echo e(ucwords($payroll->name)); ?> </td>
                 <td><?php echo e($payroll->username); ?></td>
                 <td><?php echo e(ucwords($payroll->staff_type )); ?></td>
                 <td>
                     <?php
                         $total_days =  cal_days_in_month ( CAL_GREGORIAN , $payroll->pay_month , $payroll->year ) ;
                     ?>
                     <?php echo e($total_days); ?>

                 </td>
                 <td>
                     <?php echo e($payroll->allowed_leave); ?>

                 </td>
                 <td>
                     <?php echo e($payroll->earned_leave); ?>

                 </td>

                 <td>
                     <?php echo e($payroll->worked_days); ?>

                 </td>
                 <td>
                    Rs.<?php echo e(number_format((float)$payroll->basic)); ?>

                 </td>
                 <!-- <td>
                     Rs.<?php echo e(number_format($payroll->overtime)); ?>

                 </td> -->
                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->allowance)); ?>

                 </td>
                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->bonus)); ?>

                 </td>
                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->gross)); ?>

                 </td>
                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->ptax)); ?>

                 </td>
                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->deductions)); ?>

                 </td>

                 <td>
                     Rs.<?php echo e(number_format((float)$payroll->total_salary)); ?>/-

                 </td>
                 <td>
                     <a href="<?php echo e(route('viewSingleEmployeePayroll',[$payroll->employee_id, $payroll_year, $payroll_month ])); ?>" class="btn  btn-info" >
                         <span class="fa fa-eye fa-left"></span>	View
                     </a>
                 </td>
                 <?php /*<td>
                     <a href="<?php echo e(route('editSingleEmployeePayroll',[$payroll->employee_id, $payroll_year, $payroll_month ])); ?>" class="btn  btn-primary" >
                         <span class="fa fa-pencil fa-left"></span>	Edit
                     </a>
                 </td>*/ ?>
             </tr>
         <?php endforeach; ?>
         </tbody>
     </table>
 </div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php else: ?>
<p>
<center>
<h1>No Datas Found !!!</h1>
</center>
</p>
<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>