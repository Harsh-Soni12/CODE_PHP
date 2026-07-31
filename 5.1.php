<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>jQuery Events Demo</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <style>
    #box {
      width: 200px;
      padding: 20px;
      background-color: lightgray;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div id="box">Hover or Click Me</div>
  <input type="text" id="textInput" placeholder="Type something here...">
  <p>Input text: <span id="output"></span></p>

  <script>
    $(document).ready(function() {

      $('#box').click(function() {
        $(this).css('background-color', 'lightblue');
      });

      $('#box').mouseenter(function() {
        $(this).text('Mouse Entered!');
      });

      $('#box').mouseleave(function() {
        $(this).text('Hover or Click Me').css('background-color', 'lightgray');
      });

      $('#textInput').keyup(function() {
        var currentText = $(this).val();
        $('#output').text(currentText);
      });

    });
  </script>
</body>
</html>