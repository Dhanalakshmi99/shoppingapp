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
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
   
    $subject=$_POST['subject'];

$query = " insert into feedback(firstname,lastname,email,textarea) values ('$firstname','$lastname','$email','$subject')";
// echo "$query";

mysqli_query($con, $query );



header('Location: index.html');
exit;









?>