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
          
        <div class="row">
            <div class="col-md-12">
             
                    <div class="table-responsive">
                      <table class="table table-data-div table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo app('translator')->get('Purchase Order No'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Category Name'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Address'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Phone No'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Print PO'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Delete'); ?></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $j=1; ?>
                          <?php foreach($purchase_orders as $po): ?>
                                    <?php 
                                        $purchases = DB::table('purchases')->where('po_id', $data->po_id)->count();
                                        $created_at = explode(' ', $po->created_at);
                                    $created_at = $created_at[0];
                                    ?>
                          <tr>
                            <td><?php echo  $j++ ?></td>
                            <td><?php echo e($po->po_id); ?></td>
                            <td><?php echo e($po->ventor_name); ?></td>
                            <td><?php echo e($po->address); ?></td>
                            <td><?php echo e($po->phone_no); ?></td>
                            <td><a title='Edit' class='btn btn-info btn-sm' href='<?php echo e(url("print/order/purchase")); ?>/<?php echo e($po->po_id); ?>'><?php echo app('translator')->get('Print PO'); ?></a></td>
                            <td><a href='<?php echo e(url("purchase/update-goods")); ?>/<?php echo e($po->po_id); ?>' class="btn btn-danger"  ><?php echo app('translator')->get('Fill Purchased Bill'); ?></a></td>
                           <?php /* <td><?php if($purchases > 0): ?>
                                                    <a href='<?php echo e(url("purchase/update-goods")); ?>/<?php echo e($po->po_id); ?>' class="btn btn-danger"  ><?php echo app('translator')->get('Fill Purchased Bill'); ?></a>
                                                    <?php else: ?>
                                                    <a href='<?php echo e(url("purchase/update-goods")); ?>/<?php echo e($po->po_id); ?>' class="btn btn-info btn-sm"  disabled><?php echo app('translator')->get('Fill Purchased Bill'); ?></a>
                                                     <?php endif; ?>
                                                 </td>*/ ?>
                            <td>
                                    <a href='<?php echo e(url("purchase/delete-goods")); ?>/<?php echo e($po->po_id); ?>' class="btn btn-danger btn-xs" role="button"><?php echo app('translator')->get('Delete'); ?></a>
                                </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                      
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-1">
                                <a href="<?php echo e(route('purchase.add.order')); ?>" class="btn btn-info btn-lg">Back</a>
                        </div>
                      </div>
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
    $('#myTable').append('<tr><td><input type="text" class="fname" name="goodsname[]" placeholder="Enter Goods Name" required/></td><td><input type="text" class="fname" name="order_qty[]" placeholder="Enter Order Quandity" required/></td><td><input type="text" class="fname" name="p_qtu[]" placeholder="Enter Purchased Quandity"  /></td><td><input type="text" class="fname" name="u_price[]" placeholder="Enter Unit Price"  /></td><td><input type="text" class="fname" name="units[]" placeholder="Enter Units"  /><td><input type="text" class="fname" name="amt[]" placeholder="Enter Amount"  /></td></td><td><input type="button" value="Delete" class="btn btn-danger remove"/></td></tr>')
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