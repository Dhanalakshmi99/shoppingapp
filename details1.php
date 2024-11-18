<?php

$con =mysqli_connect('localhost','root');
// if($con)
// {
//     echo "connection succesful";
// }
// else
// {
//     echo "connection failed";
// }

mysqli_select_db($con, 'projectdata');
    $name=$_POST['name'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
   
    $phone=$_POST['phone'];

$query = " insert into users2(name,emailid,password,phone) values ('$name','$emailid','$password','$phone')";
// echo "$query";

mysqli_query($con, $query );



header('Location: login.html');
exit;









?>