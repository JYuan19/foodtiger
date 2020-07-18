<?php  
include "database/connection.php";

session_start();  
if(isset($_SESSION['Email'])){
    $Email=$_SESSION['Email'];
    $sql="select * from customer where Email = '$Email'";
    $result=$conn->query($sql);
     if($result->num_rows>0){
         while($row=$result->fetch_assoc()){
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Email']=$row['Email'];
            $_SESSION['PhoneNo']=$row['PhoneNo'];
            $_SESSION['Address']=$row['Address'];
            $_SESSION['Password']=$row['Password'];
            
      }
    }
 }
?>  
<!DOCTYPE html>
<html>  
 <head>  
 <title>FoodTiger - Edit Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo 256x256.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/nav-bar.css">
    <link rel="stylesheet" href="css/profile.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
 </head>  
 <body>  
 <header>        
        <?php 
          include "navandfooter/nav.php";
        ?>
    </header>
    <div class="imgcontainer">
      <img src="image/avatar6.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    <h2>Edit Profile</h2><hr>
      <label for="Name"><b>Username</b></label>
      <input type="text" value="<?php echo $_SESSION['Name']; ?>">
      <label for="Email"><b>Email</b></label>
      <input type="text" value="<?php echo $_SESSION['Email']; ?>">
      <label for="PhoneNo"><b>Phone Number</b></label>
      <input type="text" value="<?php echo $_SESSION['PhoneNo']; ?>">
      <label for="Address"><b>Address</b></label>
      <input type="text" value="<?php echo $_SESSION['Address']; ?>"> 
      <input type="submit" name="update" class="btn btn-warning text-uppercase text-white" value="Update" ><br/><br/>
      <label for="CPassword"><b>Current Password</b></label>
      <input type="password" value=""> 
      <label for="NPassword"><b>New Password</b></label>
      <input type="password" value=""> 
      <label for="CNPassword"><b>Comfirm Password</b></label>
      <input type="password" value=""> 
      <input type="submit" name="update2" class="btn btn-warning text-uppercase text-white" value="Update" >
    </div>
    <footer style="margin-top:5%;">
        <?php 
          include "navandfooter/footer.php";
        ?>