<?php 
session_start();
if(isset($_SESSION['Mobile_num'])){
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
       <form action="" method="POST">
            Account Number: <input type="text" name="ac_num"><br><br>
            <input type="submit" value="Show transaction" name="submit"><br><br><br>  
        </form>
  </body>
  </html>
     

 <?php 
}
?>
