<head>
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<script src="index.js"></script>

</head>
<title>Form</title>
<style>

body{
 	background-color:white;
    font-family: "Times New Roman", Times, serif;

}


input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 30px 0;
    border: 1px solid #C70039;
    display: inline-block;
	text-align: left;
	float: right;
	border-radius:50px;
	margin-top:-20px;
	font-family: "Times New Roman", Times, serif;

}

/* Set a style for all buttons */
button {
    background-color: #800020;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius:15px;
    width:300px;
    font-family: "Times New Roman", Times, serif;
    font-size:20px;

}

button:hover {
    opacity: 0.8;
}


h1 {
	font-size:40px;
	color:#800020;
	text-align:center;
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

input[type=text] {
	color:#800020;
	border: 2px solid #800020; 
	border-radius: 4px;
}

input {
    padding: 10px;
    border-radius: 50px 20px;
    outline-color: #C70039;
}

fieldset {
  border-radius:8px; 
  border-color: #800020;
  color:white;
  background-color: #800020;
  width:70%;
  margin:auto;
  }

#buttons{
	margin-left:12%;
}

label{
	
	width:300px;
	display:inline-block;
	text-align:left;


}

#gear1{
position:absolute;
top:130px;
left:60px;
	
}

#gear2{
position:absolute;
top:50px;
left:60px;
}
	
#gear3{	
position:absolute;
top:90px;
left:30px;
}

#gear4{
position:absolute;
top:450px;
right:50px;

}

#gear5{
position:absolute;
top:370px;
right:50px;

}

#gear6{
position:absolute;
top:410px;
right:20px;

}

#gear1, #gear2, #gear3, #gear4, #gear5, #gear6{
	animation: rotation 15s infinite linear;
	animation-delay: 1s;

}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
</style>
<body>
<?php 
//this includes the configuration

include 'config.php';
function alert($msg){
	echo "<script> alert('$msg')</script>";

}

if (!empty($_POST['Submit'])){
	$first_name = $_POST["first"];
	$last_name = $_POST["last"];
	$phone_number = $_POST["phone"];
	$user_name = $_POST["username"];
	$password = $_POST["password"];
	//this creates the database called with the caretaker's username 
	$sql = "CREATE DATABASE IF NOT EXISTS ".$user_name;
		
	//this checks for errors
	if (mysqli_query($conn,$sql)) {
	  $cookie_name = "username";	
 	  $cookie_value = $_POST["username"];
	  setcookie($cookie_name,$cookie_value, time() + (86400 * 30));	
	} 
	else {
   	  //echo "Error creating database: " . mysqli_error($conn);
	}

	//database Testing1 is selected
	mysqli_select_db($conn,$user_name);

	// sql to create table called caretaker
	//unique key is used to check first and last names
	//columns for the table are first name, last name, phone number, username and password
	//the first three are type varchar and the last (score) is type int
	$sql = "CREATE TABLE caretaker (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	phone VARCHAR(100) NOT NULL,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	unique key(username)
	)";

	//checks for errors within creation of Table
	if (mysqli_query($conn, $sql)) {
   		alert("Success! Now it is time to register your patient, click the Next Page button below to proceed") ;
	} 
	else {
    	//echo "Error creating table: " . mysqli_error($conn);
    	alert("An account with this username already exists. Please go to the log in page or select another username to sign up for a new account.");

	}
	
	
	  $sql ="INSERT IGNORE INTO caretaker (firstname, lastname, phone, username, password)
	   VALUES ('$first_name', '$last_name', '$phone_number','$user_name','$password')";

	//after their information is inserted, if it goes through successfully, it prompts them to head to the log-in page through text and a button that links to login.php
	if (mysqli_query($conn, $sql)) {
  					//echo "success";

				} 

	else {
  					//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
	}	
?>
<img id="gear2" src ="gear2.png" height="80" width="80">
<img id="gear1" src ="gear1.png" height="80" width="80">
<img id="gear3" src ="gear3.png" height="80" width="80">
<img id="gear5" src ="gear2.png" height="80" width="80">
<img id="gear4" src ="gear1.png" height="80" width="80">
<img id="gear6" src ="gear3.png" height="80" width="80">
  <h1> CareTaker Account Information </h1>  
<hr style="height:2px;color:#800020;background-color:#C70039;width:70%;">

  <!--I added a horizontal line because it divides up the different parts of the form and makes it look more clean and organized.-->
  <!--Below is my code for the text-fields, and they ask for Personal Information to place the pizza order. I also connected it to my other html webpage, so that when you click on submit it leads you to a thank you page.-->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" method="post">
   <fieldset>
    <br>
    <br>
    <label>First Name:</label> <input name="first" type="text" value="" autofocus required><br><br>
   <label> Last Name: </label><input name="last" type="text" value="" autofocus required><br><br>
   <label> Phone Number:</label><input name= "phone" type="text" value="" autofocus required><br><br>
    <br>
    <br>
    </fieldset>
    <!--I added another horizontal rule.-->
    <br>
  <hr style="height:2px;color:#800020;background-color:#C70039;width:70%;">
  <br>
  <fieldset>
  <br>
  <br>
  <label> Username: </label> <input name="username" type="text" value="" autofocus required><br>
  <label> Password: </label><input name="password" id="password" type="password" value="" autofocus required><br>
  <label> Confirm Password:</label> <input id="confirmation" type="password" value="" autofocus required onchange="Confirm()">
  <br>
  <p id="confirmationMessage"></p>
  <input type="checkbox" onclick="showPass()">Show Password

   </fieldset>

  <br>

  <!--Below are my buttons for submit and reset which I learned from W3 schools.-->
  <div id="buttons">
  <button onclick="location.href='signup.html'" type="button">Return to Previous Page</button> &nbsp &nbsp &nbsp
   <button type="submit" value="Submit" name="Submit">Submit</button> &nbsp &nbsp&nbsp&nbsp
    <button onclick="location.href='patientsignin.php'" type="button">Next Page</button>
    </div>
  </form>
<script>

function showPass() {
    var x = document.getElementById("password");
  	if (x.type === "password") {
  	  x.type = "text";
  		} 
  	else {
   	  x.type = "password";
  		}
  		
}

</script>

</body>