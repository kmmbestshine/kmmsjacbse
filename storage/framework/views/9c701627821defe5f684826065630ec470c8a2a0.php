<?php if($getAllTeacherAttendance): ?>
<table class="table ">
	<thead>
	<tr>
		<th colspan="11" style="background-color: #FF0000;color:#ffffff">
			<strong>
				View Employee Attendance List
			</strong>
		</th>
	</tr>
	<tr>
		<th>S.No</th>
		<th>Date </th>
		<th>Employee Name </th>
		<th>Employee Id</th>
		<th>Department</th>
		<th>Contact No</th>
		<th>Attendance</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Leave</th>
		<th>Absent</th>
	</tr>
	</thead>
	<?php if(count($getAllTeacherAttendance)>0): ?>
		<tbody>
		<?php foreach($getAllTeacherAttendance as $key => $attendance): ?>
			<tr>
				<td><?php echo e($key+1); ?></td>
				<td><?php echo e(date('d-m-Y',strtotime($attendance->date))); ?></td>
				<td><?php echo e($attendance->name); ?></td>
				<td><?php echo e($attendance->username); ?></td>
				<td><?php echo e($attendance->staff_type); ?></td>
				<td><?php echo e($attendance->mobile); ?></td>
				<td>
					<?php if($attendance->attendance == 'P'): ?>
						Present
					<?php elseif($attendance->attendance == 'L'): ?>
						Leave
					<?php else: ?>
						Absent
					<?php endif; ?>
				</td>
				<?php if($attendance->attendance == 'P'): ?>
					<td>
						<?php echo e($attendance->in); ?>

					</td>
					<td>
						<?php echo e($attendance->out); ?>

					</td>
				<?php else: ?>
					<td>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					</td>
					<td>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					</td>
				<?php endif; ?>
				<td>
					<?php if($attendance->attendance == 'L'): ?>
						<?php echo e($attendance->attendance); ?>

					<?php else: ?>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					<?php endif; ?>
				</td>
				<td>
					<?php if($attendance->attendance == 'A'): ?>
						<?php echo e($attendance->attendance); ?>

					<?php else: ?>
						&nbsp;-&nbsp;&nbsp;&nbsp;
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	<?php else: ?>
		<p>
		<center>
			No Datas Found !!!
		</center>
		</p>
	<?php endif; ?>
</table>
<?php elseif($getDailyTeacherAttendance): ?>
	<table class="table ">
		<thead>
		<tr>
			<th colspan="7" style="background-color: #FF0000;color:#ffffff">
				<strong>
					<?php if($input['daily_staff_type'] !='all_staff'): ?>
						<?php foreach($getDailyTeacherAttendance as $day => $dailyValue): ?>
						<?php endforeach; ?>
						<?php echo e(ucwords($dailyValue->staff_type)); ?>

					<?php else: ?>
						All Staff(s)
					<?php endif; ?>
					Daily Attendance Report
					<?php if($input['daily_status'] == 'A'): ?> (Absent) <?php else: ?> <?php endif; ?>

				</strong>
			</th>
		</tr>
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
<?php elseif($getAllTeachers): ?>
    <?php
    $days = cal_days_in_month ( CAL_GREGORIAN , $input['month'] , $input['year'] );
    ?>
	<table class="table " border="1">
		<thead>
		<tr style="background-color: #17619a;color:#ffffff;border: 1px solid white;">
			<th colspan="4">Date</th>

			<?php for($i=1;$i<= $days;$i++): ?>
				<th> <?php echo e($i); ?></th>
			<?php endfor; ?>

		</tr>
		<tr style="background-color: #17619a;color:#ffffff;border: 1px solid white;">
			<th>S.No</th>
			<th >Name</th>
			<th colspan="2">Employee ID</th>
			<?php for($k=1;$k<= $days;$k++): ?>
				<th></th>
			<?php endfor; ?>
		</tr>
		</thead>
		<?php if(count($getAllTeachers)>0): ?>
			<tbody>
			<?php foreach($getAllTeachers as $monthly => $monthReport): ?>
				<tr>
					<td rowspan="2">
						<strong><?php echo e($monthly+1); ?></strong>
					</td>
					<td rowspan="2">
						<strong><?php echo e(ucwords($monthReport->name)); ?></strong>
					</td>
					<td rowspan="2">
						<strong><?php echo e($monthReport->username); ?></strong>
					</td>
					<td>
						<table>
							<tr></tr>
							<tr>
								<td>In
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
														<?php /*<input value="AB" disabled="disabled"
                                                        style="border: transparent;background-color: transparent">
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
							<tr>
								<td>Out
								</td>
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
						</table>
					</td>


				</tr>
			<?php endforeach; ?>
			<tr>
				<th colspan="12">
					<center>No Of days In Month :</center>
				</th>
				<th colspan="<?php echo e($days-8); ?>"> <?php echo e($days); ?> Days</th>

			</tr>
			</tbody>
		<?php endif; ?>
	</table>
<?php else: ?>
	No Datas Found !!!
<?php endif; ?>