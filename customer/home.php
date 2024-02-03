<?php
   session_start();
   if(isset($_SESSION['Mobile_num'])){
   $mobile_num=$_SESSION['Mobile_num'];
   

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "bank";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
       die("connection couldnot established");
   }
 
//    Data of main content
   $sql="SELECT * FROM customer where Mobile_num=$mobile_num";
   $data = mysqli_query($conn, $sql);
   if (mysqli_num_rows($data) > 0) {
    foreach($data as $d){
        $Mobile_num = $d["Mobile_num"];
        $name = $d["Name"]; 
        $ac_num=$d["Account_num"];
        $balance=$d["balance"];
    }
   }

//     data of transaction
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .fundtransfer_btn{
            height: 50px;
            width:100px;
            background-image:linear-gradient(white,black);
            border-radius:30px;
            color:black;
            text-align:center;

        }
        .info{
            height:250px;
            width:750px;
            background-color:wheat;
        }
        .signout_btn{
            height:30px;
            width:75px;
            position:absolute;
            right:20px;
            top:20px;
            background-color:wheat;
        }
        .transaction_history{
            height:400px;
            width:1300px;
            background-color:wheat;
        }
    </style>
</head>
<body>
    <div class="info">
        Welcome <?php echo"$name"  ?><br><br><br>
      Account Number: <?php echo"$ac_num"?> <br>
      Account Name: <?php echo"$name"?> <br>
      Balance: <?php echo"$balance"?>
  </div> 
  <div class="fundtransfer_btn">
     <a href="fund_transfer.php ">
      Fund Transfer
    </a>

  </div>
  <div class="transaction_history">
    Transaction History <br>
    Transaction id &nbsp;Sender account number&nbsp;Receiver account number&nbsp; Amount <br><br>
    <?php  
    $transaction=" SELECT * FROM transaction where sender_ac_num='$ac_num' OR receiver_ac_num='$ac_num' ";
    $trans_data=mysqli_query($conn,$transaction);
    if (mysqli_num_rows($trans_data) > 0) {
     foreach($trans_data as $d){
         $transaction_id = $d["transaction_id"];echo"$transaction_id";echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
         $sender_ac_num = $d["sender_ac_num"]; echo" $sender_ac_num";echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
         $receiver_ac_num=$d["receiver_ac_num"];echo" $receiver_ac_num";echo"&nbsp&nbsp&nbsp&nbsp";
         $transaction_amt=$d["transaction_amt"];echo" $transaction_amt";echo"&nbsp";
         echo"<br> <br>";
      }
     }  
       
   ?>
  </div>
  <div class="signout_btn">
    <a href="..//signout.php">Sign out</a>
  </div>
</body>
</html>
<?php
  } else{
    echo"Please login first";
}

 ?>