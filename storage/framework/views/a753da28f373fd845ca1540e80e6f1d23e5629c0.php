<?php $__env->startSection('title', 'Index Syllabus'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Syllabus</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Input Syllabus</strong></h3>
                        <div class="text-right">
                            <a href="<?php echo e(route('view.syllabus.list')); ?>" class="btn btn-info btn-rounded">View Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo e(route('get.syllabus.index')); ?>" class="btn btn-info btn-rounded">Get Syllabus</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form class="form-horizontal" method="post" action="<?php echo e(route('post.syllabus.class')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control syllabus_class" name="class">
                                                <option value="">Choose Class</option>
                                                <?php foreach($classes as $class): ?>
                                                    <option value="<?php echo e($class->id); ?>" <?php echo e($class_id=="$class->id"?"selected":""); ?>><?php echo e($class->class); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php foreach($errors->get('class') as $classerr): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($classerr); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="col-md-6 syllabus_subject_div">
                                            <select class="form-control syllabus_subject" name="subject" disabled>
                                                <option value="">Choose Subject</option>
                                            </select>
                                            <?php foreach($errors->get('subject') as $subjecterr): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($subjecterr); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class=" control-label">Describe syllabus....</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="summernote" name="syllabus"> </textarea>
                                            <?php foreach($errors->get('syllabus') as $summernote1): ?>
                                                <div class="alert alert-danger my-alert" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button> <?php echo e($summernote1); ?>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 "></div>
                                        <div class="col-md-3">
                                            <button class="btn-info btn btn-block" type="submit" name="submit_syllabus" value="syllabus">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                Input Syllabus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($getQuestions)): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>List</strong></h3>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-striped datatable">
                            <tr style="background:#f5f5f5">
                                <th>S.No.</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Subject</th>
                               <?php /* <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Questions</th>*/ ?>
                                <th>Delete</th>
                            </tr>
                            <?php foreach($getQuestions as $key => $question): ?>
                            <tr>
                                <td> <?php echo e($key+1); ?></td>
                                <td><?php echo e($question->class); ?></td>
                                <td><?php echo e(ucwords($question->section)); ?></td>
                                <td><?php echo e(ucwords($question->subject)); ?></td>
                                <?php /*<td>
                                    <?php echo ucwords(str_limit($question->question,50)); ?>

                                </td>*/ ?>
                                <td >
                                    <a href="<?php echo e(route('deleteQuestion', $question->id)); ?>" class="btn btn-danger" title="Delete Question">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
<script>
    tinymce.init({
        // General options
        selector: '#summernote',
        plugins: ['lists advlist',' textcolor'],
       // plugins: ['lists advlist',' textcolor','link image code fullscreen imageupload','uploadimage'],
        //toolbar: "forecolor backcolor",
        //toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload | code | fullscreen | print preview media | forecolor backcolor emoticons | codesample | mybutton',
        toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | forecolor backcolor emoticons | codesample | mybutton',
       // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | mybutton',
        height : "250"
    });

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>