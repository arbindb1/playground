<!--blade view-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .hidden {
            display: none;
        }
    </style>

</head>

<body>
    <x-nav :homeroute="route('faculty.homepage')" :sdroute="route('faculty.list', ['token' => 'facultyList'])" :stroute="route('student.list', ['sttoken' => 'studentList'])" :trash="route('trash')" />
    <x-faculty-button id="addFaculty" :route="route('faculty.list', ['token' => 'facultyAdd'])">
        Add Faculty
    </x-faculty-button>
    <span>/</span>
    <x-faculty-button id="listFaculty" :route="route('faculty.list', ['token' => 'facultyList'])">
        List Faculty
    </x-faculty-button>

    <x-faculty-form id="facultyAdd" class="hidden" :route="route('faculty.store')" value="add" id="facultyAdd" class="hidden" />
    @if ($token == 'facultyList')
        <form method="GET" action={{ route('faculty.list', ['token' => 'facultyList']) }}>
            @csrf
            @method('GET')
            <x-city-filter id="cityFilter" :listAll="$listAll" :filterData="$filterData" />
        </form>
    @endif
    <x-faculty-table id="facultyList" class="hidden" :facultyData="$facultyData" />
</body>
<script>
    let list = document.getElementById('facultyList');
    let add = document.getElementById('facultyAdd');
    if ('{{ $token }}' == "facultyList") {
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
