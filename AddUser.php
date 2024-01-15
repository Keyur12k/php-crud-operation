<?php

include 'dbConnection.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "insert into `User`(name,email,mobile,password) values('$name', '$email', '$mobile', '$password')";
   $result=mysqli_query($con, $sql);

   if($result){
     header('location:index.php');
 }else{
    die(mysqli_error($con));
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>  

<body>
<form method="post">
  <div class="container my-5">
  <div class="form-group">

  <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputNumber">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary" name="submit"> Submit</button>
  </div>
</form>
</body>
</html>


