<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>

    <?php if (isset($component)) { $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e = $attributes; } ?>
<?php $component = App\View\Components\Nav::resolve(['homeroute' => route('faculty.homepage'),'sdroute' => route('faculty.list',['token' => 'facultyList']),'stroute' => route('student.list',['sttoken' => 'studentList']),'trash' => route('trash')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Nav::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $attributes = $__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__attributesOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e)): ?>
<?php $component = $__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e; ?>
<?php unset($__componentOriginal3d4e3f5369e04c2cf115b9f764b9480e); ?>
<?php endif; ?>
        <div class="content">
        <?php if (isset($component)) { $__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $attributes; } ?>
<?php $component = App\View\Components\FacultyButton::resolve(['id' => 'addStudent','route' => route('student.select', ['sttoken' => 'studentAdd'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            Add Student
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8)): ?>
<?php $attributes = $__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8; ?>
<?php unset($__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8)): ?>
<?php $component = $__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8; ?>
<?php unset($__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8); ?>
<?php endif; ?>
        <span>/</span>
        <?php if (isset($component)) { $__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $attributes; } ?>
<?php $component = App\View\Components\FacultyButton::resolve(['id' => 'listStudent','route' => route('student.list', ['sttoken' => 'studentList'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            List Student
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8)): ?>
<?php $attributes = $__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8; ?>
<?php unset($__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8)): ?>
<?php $component = $__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8; ?>
<?php unset($__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8); ?>
<?php endif; ?>

        <?php if($sttoken=="studentAdd"): ?>
            <?php if (isset($component)) { $__componentOriginal3fe86f9841b37b6da1d83300510d1040 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fe86f9841b37b6da1d83300510d1040 = $attributes; } ?>
<?php $component = App\View\Components\StudentForm::resolve(['id' => 'studentAdd','route' => route('student.store'),'facultylist' => $facultyList,'value' => 'add'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('student-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StudentForm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fe86f9841b37b6da1d83300510d1040)): ?>
<?php $attributes = $__attributesOriginal3fe86f9841b37b6da1d83300510d1040; ?>
<?php unset($__attributesOriginal3fe86f9841b37b6da1d83300510d1040); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fe86f9841b37b6da1d83300510d1040)): ?>
<?php $component = $__componentOriginal3fe86f9841b37b6da1d83300510d1040; ?>
<?php unset($__componentOriginal3fe86f9841b37b6da1d83300510d1040); ?>
<?php endif; ?>
        <?php else: ?>
        <?php endif; ?>
        
        <?php if($sttoken=="studentList"): ?>
        <?php if (isset($component)) { $__componentOriginalfc4f94dc51dcdd400e23bba5df914650 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4f94dc51dcdd400e23bba5df914650 = $attributes; } ?>
<?php $component = App\View\Components\StudentTable::resolve(['id' => 'studentList','studentlist' => $studentList] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('student-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StudentTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc4f94dc51dcdd400e23bba5df914650)): ?>
<?php $attributes = $__attributesOriginalfc4f94dc51dcdd400e23bba5df914650; ?>
<?php unset($__attributesOriginalfc4f94dc51dcdd400e23bba5df914650); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc4f94dc51dcdd400e23bba5df914650)): ?>
<?php $component = $__componentOriginalfc4f94dc51dcdd400e23bba5df914650; ?>
<?php unset($__componentOriginalfc4f94dc51dcdd400e23bba5df914650); ?>
<?php endif; ?>
        <?php else: ?>
        <?php endif; ?>
    </div>
</body>
<script>

    // document.getElementById('cityFilter').addEventListener('change', function() {
    //     this.form.submit();
    // });
</script>
</html>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/student.blade.php ENDPATH**/ ?>