<!DOCTYPE html>
<html>
<head>
    <title>HTTP Headers</title>
</head>
<body>

<button onclick="getHeaders()">Get Headers</button>

<p id="result"></p>

<script>
function getHeaders() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "test.txt", true);

    xhr.onload = function() {
        document.getElementById("result").innerHTML =
            "Content-Type: " + xhr.getResponseHeader("Content-Type") + "<br>" +
            "Content-Length: " + xhr.getResponseHeader("Content-Length") + "<br>" +
            "Last-Modified: " + xhr.getResponseHeader("Last-Modified") + "<br>" +
            "ETag: " + xhr.getResponseHeader("ETag");
    };

    xhr.send();
}
</script>

</body>
</html>

