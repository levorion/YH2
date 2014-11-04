<html>
<head>
<title>Yes Hello</title>

<?PHP
if (isset($_POST['Submit1'])) {
$username = $_POST['username']; }

/*
Comment out username validation 
 if ($username == "letmein") {
print ("Welcome back, friend!");
}
else {
print ("You're not a member of this site");
}
}

*/ 

//basic filter will recognize email, if not valid email it will be considered notemail 

if(filter_var($username, FILTER_VALIDATE_EMAIL)) { $type='email'; } else $type='phone';


?>
</head>
<body>
Yes, Hello! Enter phone number or email to connect with your new friend. <br><br> 
<Form name ="yeshello" Method ="POST" Action ="form.php" onSubmit="javascript: return confirm('Is this information correct? ');">
<Input Type = "text" Value ="phone/email" Name ="username" onclick="this.value='';" onfocus="this.select()" >
<Input Type = "Submit" Name = "Submit1" Value = "Login" >
</FORM>

<?php 

if (isset($_POST['Submit1'])) {

  echo "This input is of the type: ".$type; }
  
  ?>
</body>
</html>