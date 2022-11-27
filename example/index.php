<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 <link rel="stylesheet" type="text/css"href="http://localhost/web/html/style.css">
    <title></title>
  </head>
  <body id="target">
    <header>
      <h1><a href="http://localhost/web/example/index.php"> JavaScript</a></h1>
    </header>
    <nav>
      <ol>
      <?php
        echo file_get_contents("list.txt");
      ?>
      </ol>
    </nav>

<div id="control">
<input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
<input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
</div>
<article class="">
<?php
if(empty($_GET['id'])==false){
  echo file_get_contents($_GET['id'].".txt");
}
?>
</article>

  </body>
</html>
