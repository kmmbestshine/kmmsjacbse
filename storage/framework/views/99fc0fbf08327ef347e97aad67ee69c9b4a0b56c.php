<?php $__env->startSection('title', 'Input School Name'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
   
    .page-container .page-content{
       margin-left: 0px !important;  
    }
    
.widget.widget-item-icon .widget-data {
    padding-left: 162px;
}
.widget.widget-item-icon .widget-item-left {
    border-right: 1px solid rgba(0, 0, 0, 0.1);
    margin-right: 16px;
    padding-right: 13px;
}
.widget.widget-item-icon .widget-item-left, .widget.widget-item-icon .widget-item-right {
    width: 100px;
    padding: 5px 0px;
        padding-right: 0px;
    text-align: center;
}
.profile{
    background: #f7a62b !important;
    padding: 0px !important;
}
</style>
<div class="page-content">
    <div class="container">                
        <div class="page-toolbar">
            <div class="page-toolbar-block">
                <div class="page-toolbar-title">School Name</div>
                <div class="page-toolbar-subtitle">Insert School Name</div>
            </div>
        </div>  
        <?php if(Input::old('success')): ?>
            <center><p class="alert alert-success pull-right"><?php echo e(Input::old('success')); ?></p></center>
        <?php endif; ?>   
        <?php if(Input::old('error')): ?>
            <center><p class="alert alert-danger pull-right"><?php echo e(Input::old('error')); ?></p></center>
        <?php endif; ?>
        <?php if(Input::old('exist')): ?>
            <center><p class="alert alert-danger pull-right"><?php echo e(Input::old('exist')); ?></p></center>
        <?php endif; ?>               
        <div class="row">
            <div class="col-md-12">         	 
                <div class="block">
                    <div class="block-content"><h2><strong>Input</strong> School</h2></div>
                    <div class="block-content controls">
                        <form action="<?php echo e(route('schoolInput')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Name:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School Name" name="school_name"/>
                                    <?php foreach($errors->get('school_name') as $school_name): ?>
                                        <p class="error pull-right"><?php echo e($school_name); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                                <div class="col-md-6">
                                   
                                <div class="col-md-9">
                                     <label><strong>School Email:</strong></label>
                                    <input type="email" class="form-control" placeholder="Enter School Email Address" name="school_email"/>
                                    <?php foreach($errors->get('school_email') as $school_email): ?>
                                        <p class="error pull-right"><?php echo e($school_email); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Contact No</strong></label><input type="text" class="form-control" placeholder="Enter School Contact Number" name="school_mobile"/>
                                    <?php foreach($errors->get('school_mobile') as $school_mobile): ?>
                                        <p class="error pull-right"><?php echo e($school_mobile); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Address:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School Address" name="school_address"/>
                                    <?php foreach($errors->get('school_address') as $school_address): ?>
                                        <p class="error pull-right"><?php echo e($school_address); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School City:</strong></label>
                                    <input type="text" class="form-control" placeholder="Enter School City" name="school_city"/>
                                    <?php foreach($errors->get('school_city') as $school_city): ?>
                                        <p class="error pull-right"><?php echo e($school_city); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="col-md-9">
                                    <label><strong>School Image:</strong></label>

                                    <input type="file" class="form-control" placeholder="Enter School Name" name="school_image"/>
                                    <?php foreach($errors->get('school_image') as $school_image): ?>
                                        <p class="error pull-right"><?php echo e($school_image); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                   <!--  <div class="col-md-3"> --><!-- </div> -->
                                <div class="col-md-9">
                                    <label><strong>School Plan:</strong></label>
                                    <select name="userplan" id="userplan_change" class="form-control">
                                        <option value="">Select Plan</option>
                                        <option value="Basic">Basic</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
                                    </select>
                                    <a style="display: none" id="Edit_plan" href="" data-toggle="modal" >
                                        <label id="editcontent"></label></a>
                                </div>
                                <input type="hidden" id="usermanualplan" name="usermanualplan" value="">
                                </div>
                                <div class="col-md-6">
                                    
                                <div class="col-md-9">
                                    <label><strong>School Category:</strong></label>
                                    <select name="Categorys" class="form-control">
                                        <option value="0">Demo</option>
                                        <option value="1">Regular</option>
                                        
                                    </select>
                                </div>
                              
                                </div>
                                <div class="col-md-6">
                                      <div class="col-md-9">
                                    <label><strong>School Status:</strong></label>
                                    <select name="schoolstatus" class="form-control">       <option value="1">Active</option>          
                                        <option value="0">InActive</option>
                                       
                                        
                                    </select>
                                </div>
                                </div>

                            </div>
                            <div class="row-form">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning btn-lg pull-right">Add School</button>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="selectPlans" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>

      <div class="modal-body">
        <div class="row">
           <div id="Basic" style="display: none">
                <?php foreach($schooluserplans as $schooluserbasic): ?>
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="<?php echo e($schooluserbasic->id); ?>" onchange="plansadd(basicitem,<?php echo e($schooluserbasic->id); ?>)" style="padding: 3px;margin: 5px;" <?php echo e(($schooluserbasic->Basic == '1') ? 'checked="checked"; disabled="true"'  : ''); ?>>
                <?php echo e($schooluserbasic->Modules); ?>

                </div>
                 <?php endforeach; ?>
            </div>     
             <div id="Standard" style="display: none">
                <?php foreach($schooluserplans as $schooluserstandard): ?>
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="<?php echo e($schooluserstandard->id); ?>" onchange="plansadd(standarditem,<?php echo e($schooluserstandard->id); ?>)" style="padding: 3px;margin: 5px;" <?php echo e(($schooluserstandard->Standard == '1') ? 'checked="checked"; disabled="true"'  : ''); ?>>
                <?php echo e($schooluserstandard->Modules); ?>

                </div>
                 <?php endforeach; ?>
            </div>
             <div id="Premium" style="display: none">
                <?php foreach($schooluserplans as $schooluserpremium): ?>
                <div class="col-md-3"  style="padding: 5px;margin: 10px;">
                <input type="checkbox" id="<?php echo e($schooluserpremium->id); ?>" onchange="plansadd(Premiumitem,<?php echo e($schooluserpremium->id); ?>)" style="padding: 3px;margin: 5px;" <?php echo e(($schooluserpremium->Premium == '1') ? 'checked="checked"; disabled="true"'  : ''); ?>>
                <?php echo e($schooluserpremium->Modules); ?>

                </div>
                 <?php endforeach; ?>
            </div>     
                

       </div>
       <!--  --> 
       <!--  <p>Some text in the modal.</p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>  
    <script type="text/javascript">

            var basicitem=[];
            var standarditem=[];   
            var Premiumitem=[];
            function plansadd(items,id)
            {
                var val=$.inArray(id, items);
                if(val < 0)
                {
                     items.push(id);                  
                         
                }
                else
                {
                      items.splice($.inArray(id, items),1);  
                }
                $("#usermanualplan").val(items);                                       
            }

    </script>

  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>