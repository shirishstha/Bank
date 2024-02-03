<?php 
session_start();
if(isset($_SESSION['Mobile_num'])){
    $ac_num=$_POST['ac_num'];
    $ac_name=$_POST['ac_name'];
    echo"$ac_num";


}
?>