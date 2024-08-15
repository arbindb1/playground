<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <x-nav :homeroute="route('faculty.homepage')" :sdroute="route('faculty.list',['token' => 'facultyList'])" :stroute="route('student.list',['sttoken' => 'studentList'])" :trash="route('trash')" />
        <div class="content">
        <x-faculty-button id="addStudent" :route="route('student.select', ['sttoken' => 'studentAdd'])">
            Add Student
        </x-faculty-button>
        <span>/</span>
        <x-faculty-button id="listStudent" :route="route('student.list', ['sttoken' => 'studentList'])">
            List Student
        </x-faculty-button>

        @if($sttoken=="studentAdd")
            <x-student-form id="studentAdd"  :route="route('student.store')" :facultylist="$facultyList" value="add" />
        @else
        @endif
        {{-- <form method="GET" action={{ route('student.list', ['sttoken' => 'studentList']) }}>
            @csrf
            @method('GET')
            <x-city-filter id="cityFilter" :listAll="$listAll" :filterData="$filterData" />
        </form> --}}
        @if($sttoken=="studentList")
        <x-student-table id="studentList" :studentlist="$studentList" />
        @else
        @endif
    </div>
</body>
<script>

    // document.getElementById('cityFilter').addEventListener('change', function() {
    //     this.form.submit();
    // });
</script>
</html>
