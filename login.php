<?php
ob_start();
session_start();
?>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head><title>Learning Management System</title>


</head>
<style >
  

body {
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(http://www.smiu.edu.pk/images/smiu-graduate.jpg);
  background-size: cover;
  background-position: center;
}
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color:  #800000;
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #800000;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}
input[type=submit]
{
  background-color: #800000;
  color: #fff;
  font-size:24;
border-radius:2px;
width:150px;
height:50px;
} 

</style>
  <form method="POST" class="register-form" id="login-form">
  <label>
    <p class="label-txt">ENTER YOUR USERNAME</p>
    <input type="text" class="input" name="username">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="Password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <input type="submit" name="submit" value="Login">

</form>
<?php
    if (isset($_POST['submit']))
        {     
    include("connection.php");
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username; 
    $sql ="SELECT name FROM signup WHERE name='$username' and password='$password'";
     $result=$conn->query($sql);
    
     // if ($result->num_rows != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='dashboard.php' </script>";   
      }
    //   // else
    //   {
    //  // echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    // }
    }
    ?>


</html>