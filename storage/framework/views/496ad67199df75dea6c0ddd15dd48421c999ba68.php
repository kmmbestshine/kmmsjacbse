
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
							<?php echo e($book->no_of_books); ?>

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
    