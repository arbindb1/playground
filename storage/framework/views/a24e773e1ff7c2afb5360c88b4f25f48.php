
    <div class="e-form-div" id = "<?php echo e($id); ?>">
        <form class="e-form" action="<?php echo e($route); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <input class="e-form-input" type="text" name="name" placeholder="Enter student name">
            <br>
            <select class="e-select" id="studentDropDown" name="faculty">
                <option value="Select" disabled>Select</option>
                <?php $__empty_1 = true; $__currentLoopData = $facultylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($dat->name); ?>" <?php echo e($id = $dat->id); ?>><?php echo e($dat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </select>
            <br>
            <input class="e-form-input-button" type="submit" value="<?php echo e($value); ?>">
        </form>
    </div>
    </script>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/components/student-form.blade.php ENDPATH**/ ?>