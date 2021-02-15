<?php $__env->startSection('title', 'View Employee Attendance'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
    <li><a href="">Attendance</a></li>
    <li class="active">Employee</li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
	<style>

	</style>
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
						<h3 class="panel-title">
							<strong>View Employee Attendance</strong>
						</h3>
						<div class="text-right">
							<a href="<?php echo e(route('getTeacherAttendance')); ?>" class="btn btn-info btn-rounded">Add Employee Attendance</a>
							&nbsp;&nbsp;&nbsp;
							
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<!-- Monthly Wise Attendance Report  -->
		<div class="col-md-6">
			<form class="form-horizontal" role="form" method="get">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>View Monthly Wise Employee Attendance</strong>
						</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" >
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Staff Type</label>
										<div class="col-md-9">
											<select class="form-control " name="staff_type">
												<option value="">Select Staff Type</option>
												<option value="all">All Staff Type</option>
												<?php foreach($getStaffType as $staffType): ?>
													<option value="<?php echo e($staffType->id); ?>">
														<?php echo e($staffType->staff_type); ?>

													</option>
												<?php endforeach; ?>
											</select>
											<?php foreach($errors->get('staff_type') as $type): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($type); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Month</label>
										<div class="col-md-9">
											<select class="form-control" name="month">
												<option value="">Select Month</option>
												<?php foreach($getMonth as $month): ?>
													<option value="<?php echo e($month->id); ?>"><?php echo e($month->month); ?></option>
												<?php endforeach; ?>
											</select>
											<?php foreach($errors->get('month') as $months): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($months); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Year</label>
										<div class="col-md-9">
											<select class="form-control " name="year">
												<option value="">Select Year</option>
												<?php for($i=0;$i<5;$i++): ?>
													<option value="<?php echo e(2000+$i); ?>"><?php echo e(2021+$i); ?></option>
												<?php endfor; ?>
											</select>
											<?php foreach($errors->get('year') as $years): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($years); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12 pull-right">
											<center>
												<button type="submit"  name="monthly_report" value="monthlyReport" class="btn btn-info">
													<i class="fa fa-floppy-o fa-left"></i>
													Get Monthly Report
												</button>
											</center>
										</div>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</form>
		</div>
		<!-- Daily Attendance Report  -->
		<div class="col-md-6">
			<form class="form-horizontal" role="form" method="get">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>View Employee's Daily Report</strong>
						</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" >
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Staff Type</label>
										<div class="col-md-9">
											<select class="form-control " name="daily_staff_type">
												<option value="">Select Staff Type</option>
												<option value="all_staff">All Staff Type</option>
												<?php foreach($getStaffType as $staffType): ?>
													<option value="<?php echo e($staffType->id); ?>">
														<?php echo e($staffType->staff_type); ?>

													</option>
												<?php endforeach; ?>
											</select>
											<?php foreach($errors->get('daily_staff_type') as $daily): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($daily); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Date</label>
										<div class="col-md-9">
											<input  type="date" class="form-control" name="daily_date">
											<?php foreach($errors->get('daily_date') as $ddate): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($ddate); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label">Status</label>
										<div class="col-md-9">
											<select name='daily_status' class="form-control">
												<option value="">Select Status</option>
												<option value="L">Leave</option>
												<option value="A">Absent</option>
											</select>
											<?php foreach($errors->get('daily_status') as $dstatus): ?>
												<div class="alert alert-danger my-alert" role="alert">
													<button type="button" class="close" data-dismiss="alert">
														<span aria-hidden="true">&times;</span>
														<span class="sr-only">Close</span>
													</button> <?php echo e($dstatus); ?>

												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12 pull-right">
											<center>
												<button type="submit" name="daily_report" value="dailyReport" class="btn btn-info">
													<i class="fa fa-floppy-o fa-left"></i>
													Get Daily Report
												</button>
											</center>
										</div>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</form>
		</div>

	</div>
	<!-- View All Attendance Report  -->
	<?php if($getAllTeacherAttendance): ?>)
	<div class="row">
        <div class="col-md-12">
			<div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
						<strong>
							View All Employee Attendance List
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
									<?php /*<th>S.No</th>*/ ?>
									<th>Date </th>
									<th>Employee Name </th>
									<th>Employee Id</th>
									<th>Department</th>
									<th>Contact No</th>
									<?php /*<th>Session</th>*/ ?>
									<th>Attendance</th>
									<th>View</th>
									<th>Edit</th>
									<?php /*<th>Delete</th>*/ ?>
								</tr>
							</thead>
							<?php if(count($getAllTeacherAttendance)>0): ?>
							<tbody>
								<?php foreach($getAllTeacherAttendance as $key => $attendance): ?>
									<?php if($attendance->attendance != 'H'): ?>
									<tr>
										<?php /*<td><?php echo e($key+1); ?></td>*/ ?>
										<td><?php echo e(date('d-m-Y',strtotime($attendance->date))); ?></td>
										<td><?php echo e($attendance->name); ?></td>
										<td><?php echo e($attendance->username); ?></td>
										<td><?php echo e($attendance->staff_type); ?></td>
										<td><?php echo e($attendance->mobile); ?></td>
										<?php /*<td><?php echo e(ucwords($attendance->session_type)); ?></td>
										*/ ?>
										<td>
											<table class="table table-borderd table-striped">
												<thead>
													<tr>
														<th>P</th>
														<th>L</th>
														<th>A</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<?php if($attendance->attendance == 'P'): ?>

																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>In Time</th>
																		<th>Out Time</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			<?php echo e($attendance->in); ?>

																		</td>
																		<td>
																			<?php echo e($attendance->out); ?>

																		</td>
																	</tr>
																	</tbody>
																</table>

															<?php else: ?>
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>In Time</th>
																		<th>Out Time</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>
															<?php endif; ?>
														</td>
														<td>
															<?php if($attendance->attendance == 'L'): ?>
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			<?php echo e($attendance->attendance); ?>

																		</td>
																	</tr>
																	</tbody>
																</table>
															<?php else: ?>
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>

															<?php endif; ?>
														</td>
														<td>
															<?php if($attendance->attendance == 'A'): ?>
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			<?php echo e($attendance->attendance); ?>

																		</td>
																	</tr>
																	</tbody>
																</table>
															<?php else: ?>
																<table class="table table-borderd table-striped">
																	<thead>
																	<tr>
																		<th>&nbsp;&nbsp;&nbsp;</th>
																	</tr>
																	</thead>
																	<tbody>
																	<tr>
																		<td>
																			&nbsp;-&nbsp;&nbsp;&nbsp;
																		</td>
																	</tr>
																	</tbody>
																</table>
															<?php endif; ?>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
										<td>
											<?php /*<a href="<?php echo e(route('view.teacher.attendance.id',$attendance->id )); ?>" class="btn  btn-info" >
											*/ ?>
											<a href="<?php echo e(route('viewTeacherAttendance',$attendance->id )); ?>" class="btn  btn-info" >
												<span class="fa fa-eye fa-left"></span>	View
											</a>
										</td>
										<td>
											<a href="<?php echo e(route('editTeacherAttendance',$attendance->id )); ?>" class="btn  btn-primary" >
												<span class="fa fa-pencil fa-left"></span>	Edit
											</a>
										</td>
										<?php /*<td>
											<a href="<?php echo e(route('deleteTeacherAttendance',$attendance->id )); ?>" class="btn  btn-danger" >
												<span class="fa fa-trash fa-left"></span>Delete</a>
										</td>*/ ?>
									</tr>
									<?php endif; ?>
								<?php endforeach; ?>
							</tbody>
							<?php endif; ?>
						</table>
					</div>
				</div>
			</div>
    	</div>
    </div>
	<!-- View Daily Attendance Report  -->
	<?php elseif($getDailyTeacherAttendance): ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>
								<?php if($input['daily_staff_type'] !='all_staff'): ?>
									<?php foreach($getDailyTeacherAttendance as $day => $dailyValue): ?>
									<?php endforeach; ?>
									<?php echo e(ucwords($dailyValue->staff_type)); ?>(s)
								<?php else: ?>
									All Staff(s)
								<?php endif; ?>
								Daily Attendance Report
								<?php if($input['daily_status'] == 'A'): ?>(Absent) <?php else: ?> <?php endif; ?>

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
							<table class="table ">
								<thead>
								<tr>
									<th>S.No</th>
									<th>Date </th>
									<th>Employee Name </th>
									<th>Employee Id</th>
									<th>Department</th>
									<th>Contact No</th>
									<th>Date</th>
								</tr>
								</thead>
								<?php if(count($getDailyTeacherAttendance)>0): ?>
									<tbody>
									<?php foreach($getDailyTeacherAttendance as $day => $dailyValue): ?>
										<tr>
											<td><?php echo e($day+1); ?></td>
											<td><?php echo e(date('d-m-Y',strtotime($dailyValue->date))); ?></td>
											<td><?php echo e($dailyValue->name); ?></td>
											<td><?php echo e($dailyValue->username); ?></td>
											<td><?php echo e($dailyValue->staff_type); ?></td>
											<td><?php echo e($dailyValue->mobile); ?></td>
											<td>
												<?php echo e(date('d-m-Y',strtotime($dailyValue->date ))); ?>

											</td>
										</tr>
									<?php endforeach; ?>
									<tr>
										<td colspan="5"></td>
										<td >Total</td>
										<td ><?php echo e(count($getDailyTeacherAttendance)); ?> Employee(s)</td>

									</tr>
									</tbody>
								<?php endif; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- View Monthly Wise Attendance Report  -->
	<?php elseif($getAllTeachers): ?>
        <?php
        $days = cal_days_in_month ( CAL_GREGORIAN , $input['month'] , $input['year'] );
        ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<strong>
								<?php if($getMonthName): ?>
									View Employee Report For " <?php echo e(ucwords($getMonthName->month)); ?> - <?php echo e($input['year']); ?> "
								<?php else: ?>
									View Employee Monthly Attendance List
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
						<div class="table-responsive" >

							<table class="table " border="1" >
								<thead >
								<tr>
									<th colspan="4">Date</th>

									<?php for($i=1;$i<= $days;$i++): ?>
										<th> <?php echo e($i); ?> </th>
									<?php endfor; ?>

								</tr>
								<tr>
									<th >S.No</th>
									<th >Name</th>
									<th colspan="2">Employee ID</th>
									<?php for($k=1;$k<= $days;$k++): ?>
										<th > </th>
									<?php endfor; ?>
								</tr>
								</thead>
								<?php if(count($getAllTeachers)>0): ?>
									<tbody>
									<?php foreach($getAllTeachers as $monthly => $monthReport): ?>
										<tr >
											<td rowspan="2">
												<strong><?php echo e($monthly+1); ?></strong>
											</td>
											<td rowspan="2">
												<strong><?php echo e(ucwords($monthReport->name)); ?></strong>
											</td>
											<td rowspan="2">
												<strong><?php echo e($monthReport->username); ?></strong>
											</td>
											<td >
												<strong>In</strong>
											</td>
											<?php for($j=1;$j<= $days;$j++): ?>
												<td width="10%">
													<?php if($monthReport->monthlyReport): ?>
														<?php foreach($monthReport->monthlyReport as $report => $reportValue): ?>
															<?php if(date('d',strtotime($reportValue->date)) == $j): ?>
																<?php if($reportValue->attendance == 'P'): ?>
																	<?php echo e($reportValue->in); ?>

																<?php elseif($reportValue->attendance == 'A'): ?>
																	AB
																	<?php /*<input value="AB" disabled="disabled" style="border: transparent;background-color: transparent">
																*/ ?>
																<?php elseif($reportValue->attendance == 'L'): ?>
																	L
																<?php else: ?>

																<?php endif; ?>
															<?php endif; ?>
														<?php endforeach; ?>
													<?php endif; ?>
												</td>
											<?php endfor; ?>
										</tr>
										<tr >
											<td ><strong>Out</strong></td>
											<?php for($p=1;$p<= $days;$p++): ?>
												<td width="10%">
													<?php if($monthReport->monthlyReport): ?>
														<?php foreach($monthReport->monthlyReport as $report => $reportValue): ?>
															<?php if(date('d',strtotime($reportValue->date)) == $p): ?>
																<?php if($reportValue->attendance == 'P'): ?>
																	<?php echo e($reportValue->out); ?>

																<?php elseif($reportValue->attendance == 'A'): ?>
																	AB
																<?php elseif($reportValue->attendance == 'L'): ?>
																	L
																<?php else: ?>

																<?php endif; ?>
															<?php endif; ?>
														<?php endforeach; ?>
													<?php endif; ?>
												</td>
											<?php endfor; ?>
										</tr>
									<?php endforeach; ?>
									<tr>
										<th colspan="12">
											<center>No Of days In Month : </center></th>
										<th  colspan="<?php echo e($days-8); ?>"> <?php echo e($days); ?> Days </th>

									</tr>
									</tbody>
								<?php endif; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php else: ?>

		<p>
		<center>
			No Datas Found !!!
		</center>
		</p>

	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>