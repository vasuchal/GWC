
  <head>
    <style>
    div.topnav {
      box-shadow: 0px 6px 6px grey;
    }
    </style>
    <link rel="stylesheet" href="index1.css">
    <script src="index.js"></script>
    <div class="topnav">
      <a title="Home page"class="active" href="indexpatient.php"><img src="home.png" width="20" height="20" alt="Planets"></a>
      <a title="Information page" id="box" href="infopatient.html"><img src="question.png" width="16" height="16" alt="Question"></a>
    </div>
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<style>
body {font-family: "Times New Roman", Times, serif;
      background-color:white
      
      }

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #800020;
    color: white;

    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    box-shadow: 0px 7px 6px grey;
}
button:hover {
    opacity: 0.8;
}
button.who {
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

h1{
  	text-align:center;
  	color:#800020;
  	font-size:60px;
  	font-family: "Times New Roman", Times, serif;
  	animation: fade 3s 1;


  
  }
  
 	button{
 	  	animation: fade 2s 1;

 } 
  @keyframes fade{

	from {
	    opacity:0;
	  }
	to {
    	opacity:1;
	  }	
}
</style>
</head>
<?php  
	$pfirstname = $_COOKIE["firstNamepatient"];
	$plastname = $_COOKIE["lastNamepatient"];
	echo "<h1>Welcome, ".$pfirstname." ".$plastname."!</h1>";

?>
<body>
    <br>
    <br>
    <center>
<form method="get" action="helppage.html">
    <button title="Help Me!" id="button4" style="border-radius:15px;" type="submit"><img src="help.png" height="100" width="100"><p><strong>Help!</p></strong></button>
</form>
<form method="get" action="profile.html">
  <button title="Who Am I?" id="who" style="border-radius:15px;" class="active" type="submit" href="profile.html"><img src="person.png" height="100" width="100"><p><strong>Who am I?</strong></p></button>
</form>
<form method="get" action="patientcal.html">
  <button title="My Calendar" id="button2" style="border-radius:15px;" type="submit"><img src="cal.png" height="100" width="100"><p><strong>Calendar</strong></p></button>
</form>
<form method="get" action="entertainment.html">
  <button title="Entertainment" id="button3" style="border-radius:15px;" type="submit"><img id="music" src="music.jpeg" height=25%><p></strong></p><img id="game" src="game.jpeg" height=30%><strong><br><br><br><br><p>Entertainment</p></button>
</form>
</center>
</body>
