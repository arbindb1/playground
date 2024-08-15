<div class="p-4">
    <table class="border-2 w-8/12">
        <tr class="border-bottom">
            <th class="td-padding border-right">id</th>
            <th class="td-padding border-right">Name</th>
            <th class="td-padding border-right">Faculty</th>
            <th class="td-padding border-right">Date Deleted</th>
            <th class="td-padding border-right">Type</th>
            <th colspan="2" class="td-padding border-right">Actions</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $trash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="border-bottom">
                <td class="td-padding border-right"><?php echo e($dat->id); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->student_name ?: $dat->faculty_name); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->faculty_name ?? 'Not found'); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->student_delete ?: $dat->faculty_delete); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->type); ?></td>
                <td class="td-padding border-right">
                    <form class="e-button-delete" action="<?php echo e(route('trash.delete', ['id' => $dat->id, 'type' => $dat->type])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td class="td-padding border-right">
                    <form  action="<?php echo e(route('trash.restore', ['id' => $dat->id, 'type' => $dat->type])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <input class=" e-button-restore" type="submit" value="Restore">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No data found</p>
        <?php endif; ?>



    </table>
</div>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/components/trash-table.blade.php ENDPATH**/ ?>