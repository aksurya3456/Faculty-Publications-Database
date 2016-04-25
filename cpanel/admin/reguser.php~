<html>
<head>
<title>Register A New User
</title>
</head>
<body>

<?php
echo "<H1>Register User</h1>";
include("../commonHeader.php");
include("adminHeader.php");
echo "<H1>Register User</h1><p>";
$name=$_POST["nm"];
$dept=$_POST["dept"];
$qli=$_POST["qli"];
$gender=$_POST["gender"];
$dept=$_POST["dept"];
$deput=$_POST["deput"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$add=$_POST["address"];
//print_r($_POST);
$con=mysqli_connect("localhost","root","toor","fpd");
//redundancy check
$rquery="select * from user where email like '".$email."'";
$rresult=mysqli_query($con,$rquery);

if(mysqli_num_rows($rresult)!=0)
{
	echo "The person with email id <b> ".$email."</b> is already registered as an user with system.";

}
else
{
$query="insert into user(name,department,quali_weight,deputation,DoB,phone,email,admin_id,address,gender) values('".$name."','".$dept."',".$qli.",'".$deput."','".$dob."','".$phone."','".$email."',".$_COOKIE["usr345admin"].",'".$add."','".$gender."')";
//echo "<br>";echo "<br>";
//print_r($con);

$result=mysqli_query($con,$query);
//echo "<br>";echo "<br>";
//print_r($result);

//get id of newly added user
$query="select * from user order by id desc limit 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

print "<br><br>Newly Generated ID for ". $name ." is:".$row['id'];
//add login password for the user in login table

$query="insert into login(id,passwd) values(".$row['id'].",'password')";
mysqli_query($con,$query);
echo "<br> Default Password is 'password'. Mail is being Sent</p>";
//echo "<p>Click <a href='mailto:".$email ."'>here</a> to send mail</p>"

//We can add here mail function to notify the user.

require '/phpmailer/PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rupak01.raj01@gmail.com';                 // SMTP username
$mail->Password = 'Rupak123*';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('admin@fpd.com', 'Admin');
$mail->addAddress($email, $name);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('aksurya3456@gmail.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome to faculty publications database';
$mail->Body    = 'You are registered and you id is <b>'.$row['id'].'</b><br>Default password is <b>password</b><br>Login to website of Faculty Publications Database to change your password';
$mail->AltBody = 'You are registered and you id is '.$row['id'].'Default password is password. Login to website of Faculty Publications Database to change your password';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
?>


</body>
</html>
