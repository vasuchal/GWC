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
	animation: fade 4s 1;

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
    <label>First Name:</label> <input name="first" type="text" autofocus required><br><br>
   <label> Last Name: </label><input name="last" type="text" autofocus required><br><br>
   <label> Phone Number:</label><input name= "phone" type="text" autofocus required><br><br>
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
  <label> Username: </label> <input name="username" type="text" autofocus required><br>
  <label> Password: </label><input name="password" id="password" type="text" autofocus required><br>
  <label> Confirm Password:</label> <input id="confirmation" type="text" autofocus required onchange="Confirm()">
   <p id="confirmationMessage"></p>
   </fieldset>

  <br>

  <!--Below are my buttons for submit and reset which I learned from W3 schools.-->
  <div id="buttons">
  <button onclick="location.href='signup.html'" type="button">Return to Previous Page</button> &nbsp &nbsp &nbsp
   <button type="submit" value="Submit">Submit</button> &nbsp &nbsp&nbsp&nbsp
    <button type="reset" value="Reset">Reset</button>
    </div>
  </form>
  
</body>