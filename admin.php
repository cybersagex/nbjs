<?php include_once 'header.php' ?>


<div class="container jumbotron">
  <form action="admin.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
    </div>
    <input type="submit" name="submit" value="Login" class="btn btn-primary">
  </form>
</div>


<?php
  error_reporting(0);
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($_POST['submit']){
    if ($username === 'admin' && $password === 'password'){
      echo "<script> location.href='admin/dashboard.php'; </script>";
      exit();

    }
  }
?>

<?php include_once 'footer.php' ?>