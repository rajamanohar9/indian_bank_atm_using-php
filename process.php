<?php
	session_start();
	$user=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","atm");
	$password = mysqli_real_escape_string($con,$_POST['oldpassword']);
	$newpassword = mysqli_real_escape_string($con,$_POST['newpassword']);
	$confirmnewpassword = mysqli_real_escape_string($con,$_POST['repeatnewpassword']);
	$bool=true;
	$_SESSION['newpass']= $newpassword;
	// mysql_select_db("ATM") or die("Cannot connect to database");
	$query=mysqli_query($con,"SELECT * FROM users where username='$user'");	
	while($row=mysqli_fetch_array($query))
	{
		$dbuser=$row['username'];
		$dbpassword=$row['password'];
		if($dbpassword!=$password )
		{
			$bool=false;
			Print '<script>alert("the pass u entered was wrong!");</script>';
			 Print '<script>window.location.assign("changepassword.php");</script>';
		}
		
		elseif($newpassword!=$confirmnewpassword)
		{
			$bool=false;
			Print '<script>alert("The re_entered pin was not correct ");</script>';
			 Print '<script>window.location.assign("changepassword.php");</script>';
		}
	}
  	if($bool){  
		/* Your authentication key */ /*change with our key*/
		$authKey = "300676AEBEC3jO5db19b13";
		$query2=mysqli_query($con,"SELECT phonenumber FROM users where username='$user'");
		if($row=mysqli_fetch_assoc($query2))
		{
			$mobileNumber =$row["phonenumber"];
		}
		$_SESSION['query']="SELECT phonenumber FROM users where username='$user'";
		echo 'hi'.$mobileNumber;
		/* Sender ID,While using route4 sender id should be 6 characters long. */
		$senderId = "INDIAN";
		/* Your message to send, Add URL encoding here. */
		$rndno=rand(1000, 9999);
		$message = urlencode("otp number.".$rndno);
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

		/* API URL change this url if u use another website*/ 
		$url="https://control.msg91.com/api/sendotp.php?country=91&otp=$rndno&sender=$senderId&message=$message&mobile=$mobileNumber&authkey=$authKey";

		/* init the resource */
		$ch = curl_init();
		curl_setopt_array($ch, array( CURLOPT_URL => $url,CURLOPT_RETURNTRANSFER => true,CURLOPT_POST => true,CURLOPT_POSTFIELDS => $postData));
			/*,CURLOPT_FOLLOWLOCATION => true */



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

		if(isset($_POST['btn-save']))
		{
			
		$_SESSION['otp']=$rndno;
		header( "Location: otp.php" );

		}
	}
?>