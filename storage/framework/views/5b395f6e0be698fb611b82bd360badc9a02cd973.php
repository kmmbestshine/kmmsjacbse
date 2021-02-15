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
                                <a href="<?php echo e(route('user.library.index')); ?>" class="btn btn-info btn-rounded">Back</a>&nbsp;&nbsp;&nbsp;
                            </div>
                        
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="<?php echo e(route('list.book.lib')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="book_category">
                                        <option value="">Select Book Category</option>
                                        <option value="all">All Category</option>
                                        <?php foreach($categories as $cate): ?>
                                            <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->category); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  ">
                            <div class="form-group">
                                <div class="col-md-10 pull-right">
                                    <button type="submit" class="btn btn-info btn-block">Get Books</button>
                                </div>
                            </div>          
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php if($books): ?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="panel-title"><center>View Books - <?php echo e($category); ?> Category</center></h3>
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div style="overflow: scroll;">
                            <table class="table datatable table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Acc No</th>
                                    <th>Book Title</th>
                                    <th>Subject</th>
                                    <th>Author Name</th>
                                    <th>Publisher Name</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($books as $key => $book): ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($book->book_no); ?></td>
                                        <td><?php echo e($book->book_name); ?></td>
                                        <td><?php echo e($book->subject); ?></td>
                                        <td><?php echo e($book->auth_name); ?></td>
                                        <td><?php echo e($book->publisher_name); ?></td>
                                        <td><?php echo e($book->price); ?></td>
                                        <td>
                                            <!-- <?php if($book->available=='0'): ?>
                                                Available
                                            <?php else: ?>
                                                Not Available
                                            <?php endif; ?> -->
                                            <?php if($book->available == '0'): ?>
                                                <?php if($book->issued_books  > 0): ?>
                                                <?php echo e($book->no_of_books - $book->issued_books); ?> / <?php echo e($book->no_of_books); ?>

                                                <?php else: ?>
                                                <?php echo e($book->no_of_books); ?>

                                                <?php endif; ?>
                                                Available
                                            <?php else: ?>
                                                Not Available
                                            <?php endif; ?>
                                        </td>
                                        
                                        <td>
                                            <a href="<?php echo e(route('edit.books', $book->id)); ?>" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('deleteBook', $book->id)); ?>" class="btn btn-danger" onclick="confirm('Are You Sure')">Delete</a>
                                        </td>
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