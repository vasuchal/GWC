<!DOCTYPE html>
<html>

<head>
  <style>
  
  body{
  	text-align:center;
  	color:#800020;
  	font-family: "Times New Roman", Times, serif;
  	animation: fade 3s 1;

  }
  
  div.topnav {
    box-shadow: 0px 6px 6px grey;
    height: 48px;
  }
  img {
    box-shadow: 0px 7px 6px grey;
  }
  
   @keyframes fade{

	from {
	    opacity:0;
	  }
	to {
    	opacity:1;
    	visibility: visible;
	  }	
}
  </style>
  <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="index1.css">
  <script src="index.js"></script>
  <div class="topnav">
    <a title="Home page"class="active" href="indexpatient.php"><img src="home.png" width="20" height="20" alt="Planets"></a>
    <a title="Information page" id="box" href="infopatient.html"><img src="question.png" width="16" height="16" alt="Question"></a>
  </div>

  </div>
  <!-- <div class="topnav">
    <a class="active" href="indexpatient.html"> <img src="home.png" width="20" height="20" alt="Planets"></a>
    <a  id="box" href="infopatient.html"><img src="question.png" width="20" height="20" alt="Question"</a>
</div> -->

  <title title="Personal Information">Personal Information</title>
</head>

<?php  
	$pfirstname = $_COOKIE["firstNamepatient"];
	$plastname = $_COOKIE["lastNamepatient"];
	$cfirstname = $_COOKIE["firstNamecaretaker"];
	$clastname = $_COOKIE["lastNamecaretaker"];
	$cphone = $_COOKIE["phoneNumbercaretaker"];
	$phoneNumber = "";
	for ($i=0;$i<strlen($cphone);$i++){
		if($i == (strlen($cphone)-1)){
			$phoneNumber .= $cphone[$i];
		}
		else{
		$phoneNumber .= $cphone[$i]."-";
		}
	}

?>
<body>

  <h1 align="center" style="color:#800020;font-size:40px;">Use this Information to Identify Yourself</h1>
  <?php  
  
   echo "<p title='Name:".$pfirstname." ".$plastname."id='yes'> <font size='6';> <strong>Name</strong>: ".$pfirstname." ".$plastname."</font></p>";
   echo "<p title='Address: 555 Notarealplace Rd 34443 Houston, Texas' id='yes'> <font size='6';><strong>Address</strong>: 555 Notarealplace Rd 34443 Houston, Texas</font> </p>";
   echo " <p title='Caretaker Info: ".$cfirstname." ".$clastname."phone number is ".$phoneNumber."' id='yes' align='center'> <font size='6';><strong>Caretaker Info</strong>: ".$cfirstname." ".$clastname.", ".$phoneNumber."</font> </p>";
?>
 

  <center>
  <img title="This is a picture of you for identification" id="lit" src="grandma.jpg" alt="aligned image" height="220" width="170">
</center>
</body>

</html>
