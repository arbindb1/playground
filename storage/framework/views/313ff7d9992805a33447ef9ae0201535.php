<div class="e-form-div">
    <div id = "<?php echo e($id); ?>" class="<?php echo e($class); ?>">
        <form class="e-form" action="<?php echo e($route); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <input class="e-form-input" type="text" name="name" placeholder="Enter the faculty">
            <br>
            <input class="e-form-input-button" type="submit" value="<?php echo e($value); ?>">
        </form>
    </div>
</div>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/components/faculty-form.blade.php ENDPATH**/ ?>