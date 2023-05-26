<?php
if($_GET)
{
    $name=$_GET['name'];
    $rollno=$_GET['rollno'];
    $email=$_GET['email'];

    echo "My Name is:".$name."<br>"."<br>";
    echo "My Enrollment No is:".$rollno."<br>"."<br>";
    echo "My Email is:".$email."<br>"."<br>";
 
}
?>