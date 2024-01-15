<?php
include 'dbConnection.php'; 
?>
<html>
<!DOCTYPE html>
<html lang="en">
    <title>User List</title>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head> 

<body>
  <div class="container">
    <div class="card-header">
                        <h4 style="margin-left:490px;"> User List</h4>
                    </div>
<button  class="btn btn-primary my-5"><a href="AddUser.php" class="text-light">
  Add User </a>
</button>
<table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

        <?php
        $sql = "SELECT * FROM `User`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id =$row['id'];
            $name =$row['name'];
            $email =$row['email'];
            $mobile =$row['mobile'];
            $password =$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
      <td>
      <button class="btn btn-primary"> <a href="view.php?viewid='.$id.'" class="text-light">View</a></button>
    <button class="btn btn-primary"> <a href="UpdateUser.php?updateid='.$id.'" class="text-light">Update </a></button>
    <button class="btn btn-primary"> <a href="DeleteUser.php?deleteid='.$id.'" class="text-light">Delete </a></button>
  </td>
    </tr>';
    } 
?>
   
  </tbody>
</table>
</div>

</body>
</html>