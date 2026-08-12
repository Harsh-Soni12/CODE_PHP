<!DOCTYPE html>
<html>
<head>
    <title>jQuery Selectors and Styles</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <h1>jQuery Selectors Example</h1>

    <p>This is paragraph 1.</p>


    <div class="box">This is a div with class "box".</div>

    <br><br>

    <button id="redBtn">Change Background to Red</button>

    <script>
        $(document).ready(function () {

            $("#redBtn").click(function () {

                $("p").css("background-color", "red");

                $("h2").css("background-color", "red");

                $(".box").css("background-color", "red");

            });

        });
    </script>

</body>
</html>
