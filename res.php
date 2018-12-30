<?php 
$Host="localhost";
$user="root";
$password="";
$database="ajax";
$King=new mysqli($Host,$user,$password,$database);
if($King->connect_error){
    die('Error:('.$King->connect_errno.')'.$king->connect_error);

}
if(isset($_POST) and $_SERVER['REQUEST_METHOD']=="POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $insert="INSERT INTO users(name,lname)VALUES('$fname','$lname')";
    if($q=mysqli_query($King,$insert)){
        echo 1;
    }
    

}

?>