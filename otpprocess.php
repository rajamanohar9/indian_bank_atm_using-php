<?php
session_start();
$user=$_SESSION['user'];
$conn = mysqli_connect("localhost","root","", "atm");
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
echo $rno;
if(!strcmp($rno,$urno))
{
	
        $pass = $_SESSION['newpass'];
	
/* Create connection */


$sql = "UPDATE users SET password='$pass' where username ='$user'";

if (mysqli_query($conn, $sql)) {

   $authKey = "300676AEBEC3jO5db19b13";     /* change this authkey using msg21 or some other site 



/* Sender ID,While using route4 sender id should be 6 characters long. */
$senderId = "INDIAN";

/* Your message to send, Add URL encoding here. */
$message = urlencode("Thank u for register with us. we will get back to you shortly.");

/* Define route */
$route = "route=4";
/* Prepare you post parameters */
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);


/* API URL   make change in this url if u use another website*/  
$url="https://control.msg91.com/api/sendotp.php?country=91&otp=$urno&sender=$senderId&message=$message&mobile=$mobileNumber&authkey=$authKey";

/* init the resource */
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    /*,CURLOPT_FOLLOWLOCATION => true */
));


/* Ignore SSL certificate verification */
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


/* get response */
$output = curl_exec($ch);

/* Print error if any */
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

header( "Location: home.php" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	return true;
}
else
{
	echo "failure";
	return false;
}
?>