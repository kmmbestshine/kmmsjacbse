<?php $__env->startSection('title', 'Library Report'); ?>
<?php $__env->startSection('cram'); ?>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Report</li>
        <li class="active">Library</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Library Report</h2>
    </div>

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Library Report Form</h3>
                        <!-- <div class="text-right">
                                    <a href="<?php echo e(route('list.structure')); ?>" class="btn btn-info btn-rounded">View</a>
                                </div>  -->
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="get">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">Category</label>
                                        <div class="col-md-11">
                                            <select name="category" class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="0">All Category</option>
                                                <?php foreach($categories as $category): ?>
                                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button style="margin-top:20px" class="pull-right btn btn-info">Create Report</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php if($getCategoryBooks): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!--<h3 class="panel-title">Report - <?php echo e($students['session']); ?></h3>-->
                                <h3 class="panel-title">
                                    <?php if($categoryNo == 0): ?>
                                        All Categories
                                    <?php else: ?>

                                        <?php foreach($getCategoryBooks as $key => $category): ?>
                                        <?php endforeach; ?>
                                        <?php echo e(ucwords(trans($category->category))); ?>'s
                                    <?php endif; ?>
                                    Library Report
                                </h3>
                                <div class="text-right">
                                    <?php /* updated 14-10-2017 by priya
                                    <a href="<?php echo e(route('download')); ?>" class="btn btn-info btn-rounded">Export</a>*/ ?>
                                    <a href="<?php echo e(route('reportDownload')); ?>" class="btn btn-info btn-rounded">Export</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Book No</th>
                                            <th>Book Category</th>
                                            <th>Book Name</th>
                                            <th>Author Name</th>
                                            <th>Publisher Name</th>
                                            <th>Purchase Date</th>
                                            <th>Total Quantity</th>
                                            <th>Issued Books</th>
                                            <th>Available Books</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($getCategoryBooks as $key => $book): ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($book->book_no); ?></td>
                                                <td><?php echo e($book->category); ?></td>
                                                <td><?php echo e($book->book_name); ?></td>
                                                <td><?php echo e($book->auth_name); ?></td>
                                                <td><?php echo e($book->publisher_name); ?></td>
                                                <td><?php echo e(date('d-m-Y',strtotime($book->purchase_date))); ?></td>
                                                <td><?php echo e($book->no_of_books); ?></td>
                                                <td>
                                                    <?php echo e($book->issued_books); ?>

                                                </td>
                                                <td>
                                                    <?php if($book->available == '0'): ?>
                                                        <?php echo e($book->no_of_books - $book->issued_books); ?>

                                                    <?php else: ?>
                                                        0
                                                    <?php endif; ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <th colspan="4"></th>
                                            <th colspan="3"><center>Total</center></th>
                                            <th><?php echo e($totalNoBooks); ?></th>
                                            <th><?php echo e($totalIssue); ?></th>
                                            <th><?php echo e($totalAvailability); ?></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <center><h2>No Datas Found!!!</h2></center>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>