




<?php
include 'database.php';
if(isset($_POST['submit'])){
    // $id = $_POST[$id];
    $Username = $_POST['Username'];
    $Password = $_POST['password'];
    //$Repeat_password = $_POST['remember'];
    
    $sql ="insert into `Login` (Username,password) values ('$Username','$Password')";

    $result= mysqli_query($con,$sql);
    
    if($result)
    {
        echo "Data Insert Successfully";
        
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <link rel="stylesheet" href="CSS/Login.css">
    <script src="js/script.js"></script>
    <title>Login form</title>
</head>
<body>
   

<h2>This is Login Form <i class="fa-solid fa-arrow-down-to-line"></i></h2>

  <form class="modal-content animate" action="Login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Images/s2.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <br></br>
      <button type="submit" name ="submit">Login</button>
      <br></br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="Ragistration-form.php">password?</a></span>
    </div>
  </form>
</div>






</body>
</html>