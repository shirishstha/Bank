<?php
/*Data Retrive*/
$ac_num=$_POST["ac_num"];
$name=$_POST["name"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$address=$_POST["address"];
$mobile_num=$_POST["mobile_num"];
$email=$_POST["email"];
$pass=$_POST["password"];
$confirmpass=$_POST["confirmpass"];

/* Server connection*/
$servername="localhost";
$username="root";
$password="";
$dbname="bank";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection couldnot established");
}

$sql="INSERT INTO customer(Account_num,Name,Address,Age,Gender,Email,Mobile_num,Password)
       VALUES('$ac_num','$name','$address',$age,'$gender','$email','$mobile_num','$pass')
";
if(mysqli_query($conn,$sql)){
    echo "Signup successfully";
    echo"<a href='..//signin.html'>Signin</a>";
}else{
    echo "error couldnot signup";
}
?>