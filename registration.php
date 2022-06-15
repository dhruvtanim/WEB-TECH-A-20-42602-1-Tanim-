<?php
$isPost=false;
$username="";
$Password="";
$Profession="";
$Email="";
$Gender="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
}
if(isset($_POST["btnClick"]))
{
    $isPost=true;
    if($_POST["pass"]!="")
      $password=$_POST["pass"];
	
}
if(isset($_POST["btnClick"]))
{
    $isPost=true;
    if($_POST["uname"]!="")
      $Profession=$_POST["uname"];
	
}
if(isset($_POST["btnClick"]))
{
    $isPost=true;
    if($_POST["uname"]!="")
      $Email=$_POST["uname"];
	
}
if(isset($_POST["btnClick"]))
{
    $isPost=true;
    if($_POST["uname"]!="")
      $Gender=$_POST["uname"];
	
}
?>
<form action="#" method="post">
  <h2>Registration</h2>
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?><br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $Password=="")
 echo "<span style='color:red;'>Required</span>";
?><br><br>
$Profession:<select name="Profession">
<option value="Student">FST</option>
<option value="Teacher">FBA</option>
<option value="other">FASS</option>
</select>
<?php
if($isPost==true && $Profession=="")
 echo "<span style='color:red;'>Required</span>";
?><br><br>
Email:<input type="email" name="email"> 
<?php
if($isPost==true && $Email=="")
 echo "<span style='color:red;'>Required</span>";
?><br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $Gender=="")
 echo "<span style='color:red;'>Required</span>";
?><br><br>
<input type="submit" value="Enroll" name="btnClick">
</form>