<?php $__env->startSection('title', 'View Homework'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Homework</li>
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
                            <h3 class="panel-title"><strong>View Homework</strong></h3>
                            <div class="text-right">
                                <a href="<?php echo e(route('user.homework')); ?>" class="btn btn-info btn-rounded">Add Homework</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="form-control class" name="class">
                                        <option value="">Select Class</option>
                                       <?php /* updated 21-10-2017 by priya */ ?>
                                        <option value="0">All Class</option>
                                        <?php /* end */ ?>
                                        <?php foreach($classes as $class): ?>
                                            <option value="<?php echo e($class->id); ?>"><?php echo e($class->class); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-3 section">
                                    <select class="form-control sel-section" name="section" disabled>
                                        <option value="">Select Section</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-info btn-block">Get Homework</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <?php if($homeworks): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">View Homework</h3>
                        </div>
                        <div class="panel-body">
                            <div style=" overflow: auto">
                        <table style="border: 1px solid black" class="table datatable table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Subject</th>
                                        <th>Teacher Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>PDF</th>
                                        <th>Date</th>
                                        <th>Added By</th>
                                        <th>Homework</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($homeworks as $key => $homework): ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($homework->class); ?></td>
                                            <td><?php echo e($homework->section); ?></td>
                                            <td><?php echo e($homework->subject); ?></td>
                                            <td><?php echo e($homework->name); ?></td>
                                            <td><?php echo e($homework->description); ?></td>
                                            <td id="my-images">
                                                <?php if($homework->image!=''): ?>
                                                    <img  src="<?php echo e(url($homework->image)); ?>" alt="Snow" class="img-thumbnail" width="100px" height="100px" >
                                                    
                                                    

                                                <?php else: ?>
                                                    No Image
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($homework->pdf!=''): ?>
                                                    <a href="<?php echo e(url($homework->pdf)); ?>" class="btn btn-info">View PDF</a>
                                                <?php else: ?>
                                                    No PDF Found
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($homework->date); ?></td>
                                            <td><?php echo e($homework->homework_by); ?></td>
                                            <td><a href="<?php echo e(route('deleteHomework', $homework->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- The image zoomed in will be put inside the tag below, you should keep it in your HTML file in order to show your images -->
                                  <div class="modal"></div>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <center><h2>No Homework</h2></center>
                <?php endif; ?>
            </div>
        </div>
    </div>
   <style>
   .modal {
    display: none;
    background: #000;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: .8;
}

.modal .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -120px;
    margin-left: -150px;
    color: #fff;
}

.modal img, .modal span {
    z-index: 10;
}
   </style>
   <script>
   var images = document.querySelectorAll('#my-images img'),
    modal = document.querySelector('.modal');

// Loops through the all the images selected...
images.forEach(function (image) {
    // When the image is clicked...
    image.addEventListener('click', function(event) {
        modal.innerHTML = '<div class="modal-content"><img src="' + event.target.src + '"><br><span>' + event.target.alt + '</span></div>';
        modal.style.display = 'block';
    });
});

// When the user clicks somewhere in the "modal" area it automatically closes itself
modal.addEventListener('click', function () {
    this.style.display = 'none';
});
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>