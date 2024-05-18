<?php

include('db.php');

// $name=$email=$gender=$address=$Password="";
// $mob="";
// $dob="";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mob=$_POST['mob'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $Password=$_POST['Password'];

// echo $name;


$sql="INSERT INTO `users`(`name`, `email`, `phone_number`, `gender`, `address`, `password`) VALUES ('$name','$email','$mob','$gender','$address','$Password');";
 //$use=mysqli_query($con,$sql); 
 //$use= $conn->query($sql);
 if ($conn->query($sql) === TRUE) {

  echo '<script type="text/javascript">

            alert("inserted Successfully."); 

</script>';
  header('Location: login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>