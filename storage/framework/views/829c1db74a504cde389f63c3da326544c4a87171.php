    <table class="table datatable">
        <thead>
        <tr >
            <?php /*<th colspan="6"></th>*/ ?>
            <th colspan="16" align="center" style="background-color: #17619a;color:#ffffff" >
                <center>
                    <h2>
                        <strong>
                            <?php foreach($getPayrollDetail as $row1 =>$payment): ?>
                            <?php endforeach; ?>
                            <?php
                            $payroll_month = $payment->pay_month;
                            $payroll_year = $payment->year;
                            ?>
                            <?php if($getMonthName): ?>
                                View Payroll Report For " <?php echo e(ucwords($getMonthName->month)); ?> - <?php echo e($payment->year); ?> "
                            <?php else: ?>
                                View All Month Payroll List
                            <?php endif; ?>
                        </strong>
                    </h2>
                </center>
            </th>
        </tr>
        <tr>
            <th>S.No</th>
            <th>Employee Name </th>
            <th>Employee Id</th>
            <th>Department</th>
            <th>Total Days of Month</th>
            <th>Allowed Leave</th>
            <th>Leave Taken</th>
            <?php /*<th>Working Days</th>*/ ?>
            <th>Worked Days</th>
            <th>Basic </th>
            <!-- <th>OverTime </th> -->
            <th>Allowance </th>
            <th>Bonus</th>
            <th>Gross</th>
            <th>Prof Tax</th>
            <th>Deduction</th>
            <th>CTC</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($getPayrollDetail as $key =>$payroll): ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e(ucwords($payroll->name)); ?> </td>
                <td><?php echo e($payroll->username); ?></td>
                <td><?php echo e(ucwords($payroll->staff_type )); ?></td>
                <td>
                    <?php
                    $total_days =  cal_days_in_month ( CAL_GREGORIAN , $payroll->pay_month , $payroll->year ) ;
                    ?>
                    <?php echo e($total_days); ?>

                </td>
                <td>
                    <?php echo e($payroll->allowed_leave); ?>

                </td>
                <td>
                    <?php echo e($payroll->earned_leave); ?>

                </td>

                <td>
                    <?php echo e($payroll->worked_days); ?>

                </td>
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->basic)); ?>

                </td>
               <!--  <td>
                    Rs.<?php echo e(number_format($payroll->overtime)); ?>

                </td> -->
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->allowance)); ?>

                </td>
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->bonus)); ?>

                </td>
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->gross)); ?>

                </td>
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->ptax)); ?>

                </td>
                <td>
                    Rs.<?php echo e(number_format((float)$payroll->deductions)); ?>

                </td>

                <td>
                    Rs.<?php echo e(number_format((float)$payroll->total_salary)); ?>/-

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
                        