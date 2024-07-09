<?php
$statusCode = isset($_GET['status']) ? intval($_GET['status']) : 404;
$message = isset($_GET['message']) ? urldecode($_GET['message']) : '';

header('Content-Type: text/html');
?>

<!DOCTYPE html>
<head>
  <title>Error</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/vino_en.css">
  <script>
  </script>
</head>

  <body>
    <div class="wrapper">
    <div class="error-container">
    <header class="top-bar full" style="position: relative;" no-touch>
    Error
    </header>
    <p><?php echo nl2br($message) ?>
    <span>
      Press the HOME Button to exit<br>
      Presiona el botón HOME para salir<br>
      Pressione o botão HOME para sair<br>
      HOMEボタンを押して終了します
    </span>
  </p>
    </div>
    </div>
    </body>
</html>
