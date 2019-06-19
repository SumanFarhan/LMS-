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
<form action="#" method="post">
  <label>
    <p class="label-txt">ENTER YOUR USERNAME</p>
    <input type="text" class="input" name="txt1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input" name="txt2">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="txt3">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <input type="submit" name="submit" value="SIGN UP">

</form>
<?php
include_once "connection.php"
?>

<?php
if(isset($_POST['submit'])){
	$nam=$_POST['txt1'];
	$email=$_POST['txt2'];
	$pass=$_POST['txt3'];
	
$sql="insert into signup values('".$nam."','".$email."','".$pass."')";
$query=mysqli_query($conn,$sql);
	if($query){
		echo "Data inserted";
		}
		else 
		{
			echo mysqli_errno($conn);
			}
	}
	

?>
</html>