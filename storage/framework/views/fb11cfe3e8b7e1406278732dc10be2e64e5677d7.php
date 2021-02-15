<?php $__env->startSection('title', 'Collection Report'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li>Report</li>
    <li class="active">Collection Report</li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contant'); ?>
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Collection Report</h2>
</div>

<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($selected_class=='0' ) $selected_class='All Class' ?>
                            <?php if($selected_term=='0' ) $selected_term='All Term' ?>
                            <?php if($selected_staff=='0' ) $selected_staff='All Staff' ?>
                        </div>
                        <div class="panel-body">
                             <div id="printDiv">
                            <div class="text-right">
                                <button onclick="printScreen('printDiv')"><span class="glyphicon glyphicon-print"></span></button>        
                            </div>
                            <div style="text-align:center;padding:10px;">
                                <h1 style="text-transform:uppercase;"><?php echo e($school->school_name); ?></h1>   
                            </div> 
                            <h5>OVERALL REPORT</h5>
                            <div class="table-responsive" >
                           <table  class="table table-striped table-bordered table-hover">
                             <h3 class="panel-title"> Report - <b>   <?php echo e($selected_class); ?></b>  of  <b>  <?php echo e($selected_term); ?></b>  -   <b> From Date :</b>  <?php echo e($selected_from); ?>  - <b> To Date :</b>  <?php echo e($selected_to); ?></h3>
                             <thead>
                                <tr>
                                       <th colspan="9"></th>
                                        <th colspan="3">&nbsp; Fees Details</th>
                                    </tr> 
                                 <tr>
                                    <th>S.No</th>
                                    <th>Student Name</th>
                                     <th>Roll No</th>
                                     <th>Reg. No</th>
                                     <th>Gender</th>
                                     <th>Class</th>
                                     <th>Section</th>
                                     <th>Mobile</th>
                                     <th>Boarding</th>
                                      <th>Total</th>
                                     <th>Paid</th>
                                     <th>Balance</th>
                                     
                                     
                                 </tr>
                             </thead>
                             <tbody>     
                             <?php $j=1; ?>     

                                <?php if($getStudent): ?>
                                        <tr>
                                            <?php foreach($getStudent as $get): ?>
                                            <td ><?php echo  $j++ ?></td> 
                                            <td><?php echo e($get->name); ?></td>
                                            <td><?php echo e($get->roll_no); ?></td>
                                            <td><?php echo e($get->registration_no); ?></td>
                                            <td><?php echo e($get->gender); ?></td>
                                            <td><?php echo e($get->class); ?></td>
                                            <td><?php echo e($get->section); ?></td>
                                            <td><?php echo e($get->mobile); ?></td>
                                            <td ><?php echo e($get->boarding); ?></td>
                                            <td><?php echo e($get->getstuFee); ?></td>
                                            <td><?php echo e($get->paidstu_Amount); ?></td>
                                            <td><?php echo e($get->balancAmt); ?></td>
                                            
                                        </tr>
                                     <?php endforeach; ?>

                                    <tr>
                                        <th colspan="8"></th>
                                        <th>Total</th>
                                        <th><?php echo e($total_studentAmt); ?></th>
                                        <th><?php echo e($total_paidAmt); ?></th>
                                        <th><?php echo e($total_balancAmt); ?></th>
                                       
                                    </tr>
                                <?php endif; ?>

                             </tbody>
                         </table>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
   
    
 </div>
 <?php $__env->stopSection(); ?>
 <script type="text/javascript">

function printScreen(divID) {
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    var SchoolName = $(".school-name").attr("attr-name");
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = 
      "<html><head><title>"+SchoolName+"</title></head><body>" + 
      divElements + "</body>";

    //Print Page
    window.print();

    //Restore orignal HTML
    document.body.innerHTML = oldPage;
}
 </script>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>