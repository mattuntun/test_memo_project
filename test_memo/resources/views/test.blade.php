<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <button id="btn">表示</button>
    <script type="text/javascript">
      var btn = document.getElementById('btn');

      btn.addEventListener('click', function() {
          alert("みなさん");
          document.write('<p>こんにちは</p>');
      }, false);

    </script>
  </body>
</html>