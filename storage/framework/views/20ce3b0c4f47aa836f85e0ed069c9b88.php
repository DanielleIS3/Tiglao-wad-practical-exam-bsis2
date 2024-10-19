<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction List</title>
</head>
<body>
    <h1>Transactions</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Transaction Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Total Amount</th>
                <th>Transaction Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($transaction->transaction_title); ?></td>
                    <td><?php echo e($transaction->description); ?></td>
                    <td><?php echo e($transaction->status); ?></td>
                    <td><?php echo e($transaction->total_amount); ?></td>
                    <td><?php echo e($transaction->transaction_number); ?></td>
                    <td>
                        <a href="#">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="#">Create New Transaction</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\transaction-crud\resources\views/transactions/index.blade.php ENDPATH**/ ?>