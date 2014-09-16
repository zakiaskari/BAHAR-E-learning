

<?php

if(isset($_POST["fname"])){

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$birth=$_POST["birth"];
$username=$_POST["username"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];

$address="upload/" . $_FILES["myphoto"]["name"];

$fname=$fname." /";
$lname=$lname." /";
$gender=$gender." /";
$birth=$birth." /";
$pass=" /".$pass." /";
$email=$email." /";
$phoneno=$phoneno." /";


if(strlen($username)>3)
{
fopen("$username.txt","x");
$p=fopen("$username.txt","a");

fwrite($p,$fname);
fwrite($p,$lname);
fwrite($p,$gender);
fwrite($p,$birth);
fwrite($p,$username);
fwrite($p,$pass);
fwrite($p,$email);
fwrite($p,$phoneno);



echo "<b>First Name:</b>".$fname."<br>";
echo"<b>Last Name:</b>".$lname."<br>";
echo "<b>Gender:</b>".$gender."<br>";
echo "<b>Date of birth:</b>".$birth."<br>";
echo "<b>Username:</b>".$username."<br>";
echo "<b>Password:</b>".$pass."<br>";
echo "<b>Email:</b>".$email."<br>";
echo "<b>Pnone number:</b>".$phoneno."<br>";
echo "<img src='".$address."' width='200px'>";


//echo "<span style='color:green'>Your Name saved!</span>";

}
else 
{
//echo "<span style='color:red'>Please try again!</span>";

}

}

?>









<html>
<head>
<script>
function signup(){
var username=document.getElementById("username").value;
if(username==""){
document.getElementById("warning").innerHTML="Please fill out all the Fields with (*) apposite!";
return false;
}
else
{
document.getElementById("warning").innerHTML="Congratulations!-You are a member of Bahar now!";
return true;
}
}

</script>
</head>
<body bgcolor="#F5F5F5">
<div style="width:1024px; height:2000px; border:1 solid olive; margin:0 auto; margin-top:-5px; padding:5 5 5 5; background-color:FFFFFF;">

<fieldset id="signup" >
<legend>Create BAHAR Account</legend>

<form action="" method="post" name="login" onsubmit="return signup();" enctype="multipart/form-data" >
Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" placeholder="First Name">&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="lname" placeholder="Last Name"><br>
<br>
Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender" placeholder="Male/Female" size="8">&nbsp&nbsp&nbspDate of birth:<input type="date" name="birth" placeholder="your age"><br>
<br>
Username:<input type="text" name="username" id="username" placeholder="select username" >password:<input type="password" name="pass" placeholder="New password"><br>
<br>
E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" placeholder="Valid E-Mail" >&nbsp&nbsp&nbspPhone #<input type="integer" name="phoneno" placeholder="Phone #"><br>
Photo:<input type="file" name="myphoto" value=""><br>

<input type="submit" value="SignUp"><br>
<span id="warning" name="warning" style="color:red;"></span>
</form>

</fieldset>



</div>

</body>

</html>