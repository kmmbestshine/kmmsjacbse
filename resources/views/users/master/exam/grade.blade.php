@extends('users.layouts.default')
	@section('title', 'Exam Grade')
    @section('cram')
    <ul class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}">Home</a></li>                    
        <li class="active">Exam</li>
    </ul>
    @endsection
@section('contant')
	<div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> Exam Grade</h2>
    </div>
	@if(Input::old('success'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong> {{ Input::old('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Input::old('error'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh Snap!</strong> {{ Input::old('error') }}
                    </div>
                </div>
            </div>
        @endif
	
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
					@foreach($grades as $key => $exam)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $exam->exam_type }}</td>
							<td>{{ $exam->from_marks }}</td>
							<td>{{ $exam->to_marks }}</td>
							<td>{{ $exam->grade }}</td>
							<td>{{ $exam->result }}</td>
							<td>{{ $exam->remarks }}</td><!-- updated 10-5-2018-->
							<td>
								<a href="{{route('get.exam.grade', $exam->gid)}}" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
        </div>
	
	
		<form class="form-horizatol" role="form" method="post" action="{{route('post.exam.gradesave')}}">
			{!! csrf_field() !!}
			<div id="main_div">
				<div id="first_row">
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							
							<div class="col-md-12">
								{{ $exams->exam_type }}
								<input type="hidden" name="exam[]" class="form-control" value = "{{ $exams->id }}" placeholder="From Marks" required>
								<!--<select name="exam[]" id="ex_type"class="form-control" onchange="" required>
									<option value="">Select Exam</option>
									@if($exams)
									@foreach($exams as $key => $exam)
										<option value="{{ $exam->id }}">{{ $exam->exam_type }}</option>
									@endforeach
									@endif
								</select>
								 
								<select name="exam[]" id="ex_type"class="form-control" onchange="" required>
									@if($exams)
									
										<option value="{{ $exams->id }}">{{ $exams->exam_type }}</option>
									
									@endif
								</select> -->
								@foreach($errors->get('exam_type') as $exam_type)
									<div class="alert alert-danger my-alert" role="alert">
										<button type="button" class="close" data-dismiss="alert">
											<span aria-hidden="true">&times;</span>
											<span class="sr-only">Close</span>
										</button> {{ $exam_type }}
									</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="frommarks[]" class="form-control" placeholder="From Marks" required>
						</div>
						@foreach($errors->get('frommarks') as $frommarks)
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> {{ $frommarks }}
							</div>
						@endforeach
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="tomarks[]" class="form-control" placeholder="To Marks" required>
						</div>
						@foreach($errors->get('tomarks') as $tomarks)
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> {{ $tomarks }}
							</div>
						@endforeach
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="grade[]" class="form-control" placeholder="Grade" required>
						</div>
						@foreach($errors->get('grade') as $grade)
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> {{ $grade }}
							</div>
						@endforeach
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
						@foreach($errors->get('result') as $result)
							<div class="alert alert-danger my-alert" role="alert">
								<button type="button" class="close" data-dismiss="alert">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button> {{ $result }}
							</div>
						@endforeach
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
						<button type="submit" formaction="{{route('post.exam.gradesave')}}" class="btn btn-block btn-info">Add Grade Type</button>
					</div>
					<div class="col-md-4 text-center">
						<button type="button" id="add_grade"class="btn btn-block btn-info">Add Row</button>
					</div>
				</div>
			</div>
			
		</form>
	</div>
@endsection