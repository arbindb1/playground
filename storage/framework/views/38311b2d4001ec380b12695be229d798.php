

<div id="<?php echo e($id); ?>" class="p-4">
    <table class="border-2 w-8/12">
        <tr class="border-bottom">
            <th class="td-padding border-right">id</th>
            <th class="td-padding border-right">Name</th>
            <th class="td-padding border-right">Faculty</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $studentlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="border-bottom">
                <td class="td-padding border-right"><?php echo e($dat->id); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->name); ?></td>
                <td class="td-padding border-right"><?php echo e($dat->fc->name?? 'Not found'); ?></td>
                <td class="td-padding border-right">
                    <form action="<?php echo e(route('student.delete',['id' => $dat->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No data found</p>
        <?php endif; ?>



    </table>
</div>

<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/components/student-table.blade.php ENDPATH**/ ?>