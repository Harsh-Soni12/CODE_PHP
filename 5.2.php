<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>jQuery Load Text File</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

  <button id="loadBtn" onclick="loadtext()">Load Text File</button>
  <div id="output" style="margin-top: 15px; font-weight: bold;"></div>

  <script>
    function loadtext(){
      var xhr = new XMLHttpRequest();

      xhr.open("GET", "data2.txt", true);

      xhr.onreadystatechange = function(){
          if (xhr.readyState == 4 && xhr.status == 200){
              document.getElementById("output").innerHTML = xhr.responseText;
          }
      };
      xhr.send();
    }
  </script>

</body>
</html>