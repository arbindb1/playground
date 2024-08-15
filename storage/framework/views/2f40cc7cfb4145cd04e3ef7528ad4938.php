<!--blade view-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
        .hidden {
            display: none;
        }
    </style>

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
    <div class="content h-screen w-screen">

    <?php if (isset($component)) { $__componentOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefad8b7a85e93dc67c3680526e3a8bb8 = $attributes; } ?>
<?php $component = App\View\Components\FacultyButton::resolve(['id' => 'addFaculty','route' => route('faculty.list', ['token' => 'facultyAdd'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        Add Faculty
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
<?php $component = App\View\Components\FacultyButton::resolve(['id' => 'listFaculty','route' => route('faculty.list', ['token' => 'facultyList'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        List Faculty
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

    <?php if (isset($component)) { $__componentOriginal11d80ca5e8d2a6a29a9aa3739aac5b97 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11d80ca5e8d2a6a29a9aa3739aac5b97 = $attributes; } ?>
<?php $component = App\View\Components\FacultyForm::resolve(['id' => 'facultyAdd','class' => 'hidden','route' => route('faculty.store'),'value' => 'add'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyForm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11d80ca5e8d2a6a29a9aa3739aac5b97)): ?>
<?php $attributes = $__attributesOriginal11d80ca5e8d2a6a29a9aa3739aac5b97; ?>
<?php unset($__attributesOriginal11d80ca5e8d2a6a29a9aa3739aac5b97); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11d80ca5e8d2a6a29a9aa3739aac5b97)): ?>
<?php $component = $__componentOriginal11d80ca5e8d2a6a29a9aa3739aac5b97; ?>
<?php unset($__componentOriginal11d80ca5e8d2a6a29a9aa3739aac5b97); ?>
<?php endif; ?>
    <?php if($token == 'facultyList'): ?>
        <form method="GET" action=<?php echo e(route('faculty.list', ['token' => 'facultyList'])); ?>>
            <?php echo csrf_field(); ?>
            <?php echo method_field('GET'); ?>
            <?php if (isset($component)) { $__componentOriginal62aba7d5152c6750dfbca37ea8a0ae3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62aba7d5152c6750dfbca37ea8a0ae3c = $attributes; } ?>
<?php $component = App\View\Components\CityFilter::resolve(['id' => 'cityFilter','listAll' => $listAll,'filterData' => $filterData] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('city-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CityFilter::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62aba7d5152c6750dfbca37ea8a0ae3c)): ?>
<?php $attributes = $__attributesOriginal62aba7d5152c6750dfbca37ea8a0ae3c; ?>
<?php unset($__attributesOriginal62aba7d5152c6750dfbca37ea8a0ae3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62aba7d5152c6750dfbca37ea8a0ae3c)): ?>
<?php $component = $__componentOriginal62aba7d5152c6750dfbca37ea8a0ae3c; ?>
<?php unset($__componentOriginal62aba7d5152c6750dfbca37ea8a0ae3c); ?>
<?php endif; ?>
        </form>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf121bd15db2f0e51dedaf10ab8562730 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf121bd15db2f0e51dedaf10ab8562730 = $attributes; } ?>
<?php $component = App\View\Components\FacultyTable::resolve(['id' => 'facultyList','class' => 'hidden','facultyData' => $facultyData] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faculty-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FacultyTable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf121bd15db2f0e51dedaf10ab8562730)): ?>
<?php $attributes = $__attributesOriginalf121bd15db2f0e51dedaf10ab8562730; ?>
<?php unset($__attributesOriginalf121bd15db2f0e51dedaf10ab8562730); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf121bd15db2f0e51dedaf10ab8562730)): ?>
<?php $component = $__componentOriginalf121bd15db2f0e51dedaf10ab8562730; ?>
<?php unset($__componentOriginalf121bd15db2f0e51dedaf10ab8562730); ?>
<?php endif; ?>
</div>
</body>
<script>
    let list = document.getElementById('facultyList');
    let add = document.getElementById('facultyAdd');
    if ('<?php echo e($token); ?>' == "facultyList") {
        list.classList.remove('hidden');
        add.classList.add('hidden');
    } else {

        add.classList.remove('hidden');
        list.classList.add('hidden');
    }
    document.getElementById('cityFilter').addEventListener('change', function() {
        this.form.submit();
    });

</script>

</html>
<?php /**PATH C:\Users\Arbin\Desktop\projectiii\resources\views/faculty.blade.php ENDPATH**/ ?>