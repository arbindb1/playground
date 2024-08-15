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
<?php $component = App\View\Components\Nav::resolve(['homeroute' => route('faculty.homepage'),'sdroute' => route('faculty.list', ['token' => 'facultyList']),'stroute' => route('student.list', ['sttoken' => 'studentList']),'trash' => route('trash')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php if (isset($component)) { $__componentOriginala49eceb8cd3df1ac6439a546b5a7e340 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala49eceb8cd3df1ac6439a546b5a7e340 = $attributes; } ?>
<?php $component = App\View\Components\TrashTable::resolve(['trash' => $trash] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('trash-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TrashTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala49eceb8cd3df1ac6439a546b5a7e340)): ?>
<?php $attributes = $__attributesOriginala49eceb8cd3df1ac6439a546b5a7e340; ?>
<?php unset($__attributesOriginala49eceb8cd3df1ac6439a546b5a7e340); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala49eceb8cd3df1ac6439a546b5a7e340)): ?>
<?php $component = $__componentOriginala49eceb8cd3df1ac6439a546b5a7e340; ?>
<?php unset($__componentOriginala49eceb8cd3df1ac6439a546b5a7e340); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/trash.blade.php ENDPATH**/ ?>