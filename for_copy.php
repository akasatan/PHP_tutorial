<?php
  $code =<<<EOF
  <!DOCTYPE html>
  <html lang="ja">
    <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
    </body>
  </html>

  php用
  <html lang="ja">
    <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
    </body>
  </html>
  EOF;
  echo $code = htmlspecialchars($code, ENT_QUOTES, "UTF-8");
?>
