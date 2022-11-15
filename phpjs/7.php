<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if($password == "1111"){
        echo "안녕하세요.";
      }
      else{
        echo "비밀번호가 틀렸습니다.";
      }
      ?>
  </body>
</html>
