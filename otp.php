<html>
	<head>
	<title>ATM</title>
<style>
 .container{
	width: 450px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}

form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
}
input
{
	margin :5px;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	position:relative;
	right:-100px;
	color:white;
}

.button:hover {
  background: #a30003;
}
body{
	background-color: PaleTurquoise;
}
    </style>
	</head>
	<body>

<div class="container">
<form action="otpprocess.php" method="post">
Enter-otp:<input type="text" name="otpvalue"/>
<button type="submit" value="submit">Submit</button>
</form>
</div>
</body>
</html> 

<?php
session_start();
echo 'hi'.$_SESSION['query'];
?>