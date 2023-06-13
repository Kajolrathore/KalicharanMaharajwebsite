<?php
include 'database.php';
if(isset($_POST['submit'])){
    // $id = $_POST[$id];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Repeat_password = $_POST['Repeat_password'];
    
    $sql ="insert into `Registration` (Username,Email,Password,Repeat_password) values ('$Username','$Email','$Password','$Repeat_password')";

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
    <link rel="stylesheet" href="CSS/others.style.css">
    <!-- <script src="js/script.js"></script> -->
    <title>Registeration Form</title>
</head>
<body>


<div class="container">
            
            <div class="card">
		<div class = "inner-box">
                    <div class="card-form">
			<h2>REGISTRATION</h2>
						
                        <form method="post">

                            <label for="name"><b>Username</b></label>
                            <input type="text" class ="input-box" name="Username" placeholder="Username" required/>
                            <br>
                            <label for="Email"><b>Email</b></label><br>
                            <input type="text" class ="input-box" name="Email" placeholder="Enter a Email" required/>
                            <br>
                            <label for="password"><b>Password</b></label>
                            <input type="password" class ="input-box" name="password" placeholder="Password" required/>
                            <br>
                            <label for="Repeat_password"><b>Repeat_password</b></label>
                            <input type="Repeat_password" class ="input-box" name="Repeat_password" placeholder="Repeat_password" required/>
                            <br>
                            <button type="submit" class ="submit-btn" name="submit">Submit</button>
			</form>
						
                        <button type="button" class="btn"><a href="Login.php">Login</a></button>
			<a href="Registration-form.php">Forgot Password</a>
		
                            <!-- <img src = "Images/homeicon.png" alt="Home" class="Homeicon"/> -->
			</a>
                    </div>
		</div>
            </div>
	</div>





</body>
</html>

