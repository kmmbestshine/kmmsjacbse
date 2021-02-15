	<?php $__env->startSection('title', 'Exam Grade'); ?>
    <?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
        <li class="active">Exam</li>
    </ul>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
	<div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Exam Grade</h2>
    </div>
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
		<div class="panel-body">
			<table class="table datatable">
				<thead>
					<tr>
						<th>#</th>
						<th>Exam Type</th>
						<th>From Marks</th>
						<th>To Marks</th>
						<th>Grade</th>
						<th>Result</th>
						<th>Remarks</th><!--updated 10-5-2018 -->
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($grades as $key => $exam): ?>
						<tr>
							<td><?php echo e($key+1); ?></td>
							<td><?php echo e($exam->exam_type); ?></td>
							<td><?php echo e($exam->from_marks); ?></td>
							<td><?php echo e($exam->to_marks); ?></td>
							<td><?php echo e($exam->grade); ?></td>
							<td><?php echo e($exam->result); ?></td>
							<td><?php echo e($exam->remarks); ?></td><!-- updated 10-5-2018-->
							<td>
								<a href="<?php echo e(route('get.exam.grade', $exam->gid)); ?>" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
        </div>
	
	
		<form class="form-horizatol" role="form" method="post" action="<?php echo e(route('post.exam.gradesave')); ?>">
			<?php echo csrf_field(); ?>

			<div id="main_div">
				<div id="first_row">
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							
							<div class="col-md-12">
								<?php echo e($exams->exam_type); ?>

								<input type="hidden" name="exam[]" class="form-control" value = "<?php echo e($exams->id); ?>" placeholder="From Marks" required>
								<!--<select name="exam[]" id="ex_type"class="form-control" onchange="" required>
									<option value="">Select Exam</option>
									<?php if($exams): ?>
									<?php foreach($exams as $key => $exam): ?>
										<option value="<?php echo e($exam->id); ?>"><?php echo e($exam->exam_type); ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
								 
								<select name="exam[]" id="ex_type"class="form-control" onchange="" required>
									<?php if($exams): ?>
									
										<option value="<?php echo e($exams->id); ?>"><?php echo e($exams->exam_type); ?></option>
									
									<?php endif; ?>
								</select> -->
								<?php foreach($errors->get('exam_type') as $exam_type): ?>
									<div class="alert alert-danger my-alert" role="alert">
										<button type="button" class="close" data-dismiss="alert">
											<span aria-hidden="true">&times;</span>
											<span class="sr-only">Close</span>
										</button> <?php echo e($exam_type); ?>

									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="frommarks[]" class="form-control" placeholder="From Marks" required>
						</div>
						<?php foreach($errors->get('frommarks') as $frommarks): ?>
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> <?php echo e($frommarks); ?>

							</div>
						<?php endforeach; ?>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="tomarks[]" class="form-control" placeholder="To Marks" required>
						</div>
						<?php foreach($errors->get('tomarks') as $tomarks): ?>
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> <?php echo e($tomarks); ?>

							</div>
						<?php endforeach; ?>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="grade[]" class="form-control" placeholder="Grade" required>
						</div>
						<?php foreach($errors->get('grade') as $grade): ?>
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> <?php echo e($grade); ?>

							</div>
						<?php endforeach; ?>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<select name="result[]" class="form-control" onchange="" required>
								<option value="" disabled="disabled" selected>Select result</option>
								<option value="Pass" >Pass</option>
								<option value="Fail" >Fail</option>
							</select>
							<!-- <input type="text" name="result[]" class="form-control" placeholder="Result" required> -->
						</div>
						<?php foreach($errors->get('result') as $result): ?>
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> <?php echo e($result); ?>

							</div>
						<?php endforeach; ?>
					</div>

					<!--10-5-2018-->
					<div class="col-md-2">
						<div class="form-group">
							<input name="remarks[]" class="form-control" placeholder="Grade Comments" >
						</div>

					</div>
                    <!--end-->



				</div></div>
				
			</div>
			<br>
			<br>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4 text-center">
						<button type="submit" formaction="<?php echo e(route('post.exam.gradesave')); ?>" class="btn btn-block btn-info">Add Grade Type</button>
					</div>
					<div class="col-md-4 text-center">
						<button type="button" id="add_grade"class="btn btn-block btn-info">Add Row</button>
					</div>
				</div>
			</div>
			
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>