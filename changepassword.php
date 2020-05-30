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
		<h2 >The Registraion Page</h2>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<form action="process.php" method="post">
			old pin : <input type="text" name="oldpassword" required/><br/>
                        new pin : <input type="password" name="newpassword" required/><br/>
                        re_Enter new pin : <input type="password" name="repeatnewpassword" required /><br/>
                       <button  type="submit" name="btn-save" >Submit</button>
		</form>	
	</div>
	</body>
	
 </html>

	