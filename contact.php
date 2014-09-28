
<?php
if(isset($_POST["username"])){
$name=$_POST["username"];
$mail=$_POST["mail"];
$organ=$_POST["organ"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$message_full="Name:".$name."Email:".$mail."Message:".$message;
if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
if(mail("admin@semorgh.com",$subject,$message_full))
echo "<span style='color:green;'>Your message was sent successfully!</span>"; 
else
echo "<span style='color:red;'>Your message was not sent please try again!</span>"; 
}
else
echo "Incorrect Email format!";

}


?>



<html>
<head>
<style type="text/css">
input.text{height:40px;width:200px; font:30px Chaparral Pro Light,sans-serif; border-top-right-radius: 25px;border-bottom-right-radius: 25px
}
a{text-decoration:none;color:black;}

</style>
</head>
<body style="background-color:#C0C0C0; width:1024px; min-height:1000px; border:1 solid gray; margin:0 auto;">
<div style="background-color:#F5F5F5; width:1024px; min-height:1000px; border:1 solid gray; margin:0 auto;">
<form action="" method="post" >
<table style="margin:0 auto; margin-top:-60px;">
<tr>
<td><h2>Contact us:</h2></td>
</tr><br>
<tr>
<td>Name:</td><td><input type="text" name="username" class="text"></td><br>
</tr>
<tr>
<td>Email:</td><td><input type="text" name="mail" class="text"></td><br>
</tr>
<tr>
<td>Organization:</td><td><input type="text" name="organ" class="text"></td><br>
</tr>
<tr>
<td>Subject:</td><td><input type="text" name="subject" class="text"></td><br>
</tr>
<tr>
<td valign="top">Message:</td><td><textarea rows="10" cols="50" name="message">

</textarea></td>
<br><tr>
<td></td><td style="text-align:right;" ><input type="submit" value="Send" ></td>
<tr>
<td></td><td><a href="https://twitter.com" target="_blank"><img src="phone.png"></a><a href="https://twitter.com" target="_blank"><img src="twitter.png"></a><a href="https://facebook.com" target="_blank"><img src="facebook.png"></a></td>
</tr>
</table>



</form>
</div>
</body>

</html>