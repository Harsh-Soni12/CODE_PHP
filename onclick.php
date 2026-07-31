<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="demo">
        <p>Hello class</p>
        <button onclick="change()">click me</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
    
    <script>
        function change() {
            $("#demo").html("<h1>welcome to class</h1>");
        }
    </script>
</body>
</html>