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
    <x-nav :homeroute="route('faculty.homepage')" :sdroute="route('faculty.list', ['token' => 'facultyList'])" :stroute="route('student.list', ['sttoken' => 'studentList'])" :trash="route('trash')" />
        <div class="content">
    <x-trash-table :trash="$trash" />
        </div>
</body>

</html>
