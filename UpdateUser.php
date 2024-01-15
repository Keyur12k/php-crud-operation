<?php
include 'dbConnection.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "UPDATE `User` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' WHERE id = $id";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
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

      <?php
    $sql = "SELECT * FROM `User` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

  <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $row['name'] ?>">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $row['email'] ?>">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="<?php echo $row['mobile'] ?>">

  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row['password'] ?>">
  </div>

  <button type="submit" class="btn btn-primary" name="submit"> Update</button>
  </div>
</form>
</body>
</html>
