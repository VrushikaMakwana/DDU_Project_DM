<?php

$conn= mysqli_connect('localhost','root');

if($conn)
{
    echo "Connection Successful";
}
else{
   // echo "No Connection";
}
if(mysqli_select_db($conn,'flights'))
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
    if(isset($_POST['credit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        
        $cname=$_POST['cname'];
        $cno=$_POST['cno'];
        $date=$_POST['date'];
        $year=$_POST['year'];
        $cvv=$_POST['cvv'];
        $que="INSERT INTO `debit` (`email`, `name`, `cname`, `cno`, `cdate`, `cyear`, `cvv`) VALUES ('$id', '$name', '$cname', '$cno', '$date', '$year', '$cvv');";
        mysqli_query($conn,$que);
        header('location:success.php');
    }
    else
    {
        echo "Nothing for credit";
    }
    if(isset($_POST['sub1']))
    {
        $card_name=$_POST['cname'];
        $card_number =$_POST['cno'];
        $card_date=$_POST['cdate'];
        $card_year=$_POST['cyear'];
        $card_cvv=$_POST['cvv'];
        $query="INSERT INTO `credit` (`Card Name`, `Card Number`, `date`, `year`, `cvv`) VALUES ('$card_name', '$card_number', '$card_date', '$card_year', '$card_cvv');";
        mysqli_query($conn,$query);
        header('location:success.php');
    }
    else
    {
        echo "Nothing for debit";
    }
    }
}


?>