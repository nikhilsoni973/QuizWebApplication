<?php
    $con=mysqli_connect('localhost','root','','javascript');
    if (!$con) {
        die('Error found: ' . mysqli_connect_errno());
    }

$name = $_POST['name'];
$point=$_POST['points'];
// $time=$_POST['time'];
$ans=$_POST['ans'];
$correct=$_POST['correct'];

if(!empty($name)) {
    echo "<p>Hi, <b>$name</b>. Your name has been received successfully.<p>";
    echo gettype($point);
    echo gettype($ans);
    echo gettype($correct);
    if(mysqli_query($con,"INSERT INTO user (Name,Points,correctAns) VALUES('$name','$point','$correct')")){
        echo"success";
    } 
    else{
        echo"failure ".mysqli_error($con);
    }
} else {
    echo "<p>Not received</p>";
}


    ?>


