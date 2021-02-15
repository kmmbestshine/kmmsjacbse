<?php $__env->startSection('title', 'Library'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Library</li>
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
    <!------- updated 28-9-2017 by priya -------->
    
    <div class="page-content-wrap">
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                       
                            <h3 class="panel-title"><center>View Books</center></h3>
                             <div class="text-right">
                                
                            </div>
                        
                    </div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <?php if($issues): ?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="panel-title"><center>View Books -  Category</center></h3>
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div style="overflow: scroll;">
                            <table class="table datatable table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                     <th>User Name</th>
                                    <th>Acc No</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Issue Date</th>
                                    <th>Return Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($issues as $key => $book): ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($book->teacher_name); ?></td>
                                        <td><?php echo e($book->book_no); ?></td>
                                        <td><?php echo e($book->book_name); ?></td>
                                        
                                        <td><?php echo e($book->auth_name); ?></td>
                                        
                                        <td><?php echo e($book->issue_date); ?></td>
                                        <td><?php echo e($book->return_date); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <center><h2>No Books Found!!!</h2></center>
        <?php endif; ?>
        
    <!--------------  End  ---------------> 
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>