<?php $__env->startSection('title', 'Purchase Order'); ?>
<?php $__env->startSection('cram'); ?>
<ul class="breadcrumb">
    <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>                    
    <li class="active">Purchase Order</li>
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
          <div class="text-right">
                          <a href="<?php echo e(route('ventor.add.purchase')); ?>" class="btn btn-info btn-rounded">Add New Vendor</a>
                            &nbsp;&nbsp;&nbsp;
                              <a href="<?php echo e(route('purchase.goods.edit')); ?>" class="btn btn-info btn-rounded">View Purchase Order</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo e(route('purchase.reports.list')); ?>" class="btn btn-info btn-rounded">Purchase Reports</a>
                        </div>
             
        <div class="row">
            <div class="col-md-12">
                             <div class="page-panel-title"><?php echo app('translator')->get('Add New Purchase Order'); ?></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" action="<?php echo e(route('purchase.order.create')); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          <label for="name" class="col-md-4 control-label"><?php echo app('translator')->get('Vendor Name'); ?></label>

                          <div class="col-md-6">
                              <select  class="form-control" name="ventorname">
                                <?php foreach($ventors as $ventor): ?>
                                  <option value="<?php echo e($ventor->id); ?>"><?php echo e($ventor->ventor_name); ?></option>
                                <?php endforeach; ?>
                              </select>

                              <?php if($errors->has('name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                     
                        <table id="myTable" style="border: 1px solid black" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                  
                 <th> DESCRIPTION</th>
                 <th> ORDER QTY</th>
                 <th> UNITS</th>
                <!-- <th> ISSUED QTY</th>
                 <th> UNITS</th>
                 <th> UNIT PRICE</th>
                 <th> AMOUNT</th>-->
                 <th> Delete</th>
                </tr>
                </thead>
            <tbody>
            <?php $j=1; ?>
              <tr>
                  
                  <td>
                      <input type="text" class="fname" name="goodsname[]" placeholder="Enter Description" required/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="order_qty[]" placeholder="Enter Order Quandity" required/>
                  </td>
                  <td>
                      <input type="text" class="fname" name="units[]" placeholder="Enter Units"  />
                  </td>
                <!--  <td>
                      <input type="text" class="fname" name="p_qtu[]" placeholder="Enter Purchased Quandity"  />
                  </td>
                  <td>
                      <input type="text" class="fname" name="units[]" placeholder="Enter Units"  />
                  </td>
                  <td>
                      <input type="text" class="fname" name="u_price[]" placeholder="Enter Unit Price"  />
                  </td>
                   
                  <td>
                      <input type="text" class="fname" name="amt[]" placeholder="Enter Amount"  />-->
                  </td>
                  <td>
                      <input type="button" value="Delete" class="btn btn-danger remove"/>
                  </td>
              </tr>
              
              </tbody>
          </table>
          <p>
              <input type="button" value="Insert row" class="btn btn-info">
          </p>
                      <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                          <label for="description" class="col-md-2 control-label"><?php echo app('translator')->get('Paid Amount'); ?></label>

                          <div class="col-sm-offset-1 col-sm-8">
                              <input type="text" class="paid" name="paid_amt" placeholder="Enter Paid Amount" />

                          </div>
                      </div>
                     
                      <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                          <label for="description" class="col-md-2 control-label"><?php echo app('translator')->get('Remarks'); ?></label>

                          <div class="col-sm-offset-1 col-sm-8">
                              <textarea rows="3" id="remarks" class="form-control" name="remarks" placeholder="<?php echo app('translator')->get('Remarks'); ?>" ></textarea>

                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-info"><?php echo app('translator')->get('Save'); ?></button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><input type="text" class="fname" name="goodsname[]" placeholder="Enter Goods Name" required/></td><td><input type="text" class="fname" name="order_qty[]" placeholder="Enter Order Quandity" required/></td><td><input type="text" class="fname" name="units[]" placeholder="Enter Units"/></td><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')
});
    </script>
    <script>
function deleteRow(id,row) {
    document.getElementById(id).deleteRow(row);
}

function insRow(id) {  
    var filas = document.getElementById("myTable").rows.length;
    var x = document.getElementById(id).insertRow(filas);
    var y = x.insertCell(0);
    var z = x.insertCell(1);
    y.innerHTML = '<input type="text" id="fname">';
    z.innerHTML ='<button id="btn" name="btn" > Delete</button>';
}
</script>
 <script>
        document.getElementById('iban').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>