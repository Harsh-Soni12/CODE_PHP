<!DOCTYPE html>
<html>
<head>
    <title>AJAX Menu</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>My Website</h2>

<a href="#" class="menu" data-page="home.html">Home</a> |
<a href="#" class="menu" data-page="about.html">about</a> |
<a href="#" class="menu" data-page="blog.html">blog</a>

<div id="content">
    <h3>Welcome!</h3>
    <p>Click a menu item.</p>
</div>

<script>
$(".menu").click(function(e) {
    e.preventDefault();

    var page = $(this).data("page");

    $.ajax({
        url: page,
        success: function(data) {
            $("#content").html(data);
        }
    });
});
</script>

</body>
</html>
