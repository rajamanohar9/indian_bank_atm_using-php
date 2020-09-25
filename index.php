<html>
	<head>
	<title>ATM</title>
	<style>
    .container{
	width: 360px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}

p{
	font-family: sans-serif;
	font-weight: bold;
	font-size:  20px;
}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	background-color: #428BCA;
	text-align: center;
	color: white;
	font-family: verdana;
	text-decoration: none;
}
button:hover {
  background: #CF4647;
}

body{
	background-color: PaleTurquoise    ;
}
    </style>
	</head>
	<body>

	<div class="container">
		<?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO INDIAN BANK ATM</B> </marquee></p>";
		?>
		<button type="button" onclick="location.href='login.php'">LOGIN</button><br/>
		
		<button type="button" onclick="location.href='register.php'">REGISTER</button> 
		
			</b></center>
	<html>
<head>
  <link rel="stylesheet" type="text/css" href="clock_style.css">
  <script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
</head>

<body>
   <h1></h1>
   <p id="date"></p>
   <p id="time"></p>  

</body>
</html>
	</div>
	</body>

</html>
<html>
    <body>
      
    </body>
</html>
