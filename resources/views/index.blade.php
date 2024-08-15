<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" id='content' placehoder="Enter your todo's">
        <button type="button" id="btn">Add</button>
        <div id="output">
            <ul id="outputUL">

            </ul>
        </div>
    </form>
</body>
<script>
    let output = document.getElementById('output');
    let submit = document.getElementById('btn');
    let content = '';
    let ulist = document.getElementById('outputUL');
    submit.addEventListener('click', () => {
        content = document.getElementById('content').value;
        console.log(content);
        let list = document.createElement('li');
        list.textContent = content;
        ulist.appendChild(list);

    })
</script>

</html>
