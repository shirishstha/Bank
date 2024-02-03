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
        <style>
          .signout_btn{
            height:30px;
            width:75px;
            position:absolute;
            right:20px;
            top:20px;
            background-color:wheat;
        }
        </style>
    </head>
    <body>
        <form action="diposit.php" method="POST">
            Account Number: <input type="text" name="ac_num"><br><br>
            Account Name: <input type="text" name="ac_name"><br><br>
            Diposit Amount: <input type="text" name=diposit_amt><br><br>
            <input type="submit" value="Diposit" name="submit"><br><br><br>  
        </form>
        <a href="">View account details</a>
        <div class="signout_btn">
           <a href="..//signout.php">Sign out</a>
        </div>
    </body>
    </html>
<?php
}
?>