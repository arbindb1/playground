<div>
   <select class="e-select" id="<?php echo e($id); ?>" name="filter-faculty">
    <option value="Select" disabled <?php echo e(empty($filterData)?'selected':''); ?>>Select</option>
    <?php $__empty_1 = true; $__currentLoopData = $listAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <option  value="<?php echo e($dat->name); ?>" <?php echo e($filterData == $dat->name?'selected' : ''); ?>><?php echo e($dat->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    No
    <?php endif; ?>
   </select>
</div>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/components/city-filter.blade.php ENDPATH**/ ?>