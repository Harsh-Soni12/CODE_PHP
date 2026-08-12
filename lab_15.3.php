<!DOCTYPE html>
<html>
<head>
    <title>Smooth Scroll to Top</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

    <h1 id="top">My Web Page</h1>

    <div class="content">
        <h2>Welcome</h2>
        <p>This is some content on the web page.</p>
        <p>Scroll down to see the button.</p>

        <br><br><br><br><br><br><br><br><br>

        <h2>More Content</h2>
        <p>Keep scrolling down...</p>

        <br><br><br><br><br><br><br><br><br>

        <h2>End of Page</h2>
        <p>Click the button below to smoothly return to the top.</p>
    </div>

    <button id="topBtn">Go to Top</button>

    <script>
        $(document).ready(function () {

            $("#topBtn").click(function () {

                $("html, body").animate({
                    scrollTop: 0
                }, 1000);

            });

        });
    </script>

</body>
</html>
