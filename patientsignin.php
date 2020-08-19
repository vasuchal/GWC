<head>
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
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
	font-family: "Times New Roman", Times, serif;

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

div{
	margin-left:13%;
}

span{
	font-size:9px;

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

#gear1, #gear2, #gear3{
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

#buttons{
	margin-left:12%;
}
</style>
<body>
  <img id="gear2" src ="gear2.png" height="80" width="80">
  <img id="gear1" src ="gear1.png" height="80" width="80">
  <img id="gear3" src ="gear3.png" height="80" width="80">
  <h1> Patient Account Information </h1>
  <hr style="height:2px;color:#800020;background-color:#C70039;width:70%;">
  <br>
  <!--I added a horizontal line because it divides up the different parts of the form and makes it look more clean and organized.-->
  <!--Below is my code for the text-fields, and they ask for Personal Information to place the pizza order. I also connected it to my other html webpage, so that when you click on submit it leads you to a thank you page.-->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" method="post">
   <fieldset>
   <!--I added a legend tag which I learned from W3 schools, and I also learned how to use field-style.-->
    <br>
    <label>First Name: </label><input type="text" autofocus required><br>
    <label>Last Name: </label><input type="text" autofocus required><br>
    <label>Password: </label><input value="Password will be the same as caretaker's" type="text" autofocus required><br>

    <br>
    </fieldset>
    <!--I added another horizontal rule.-->


  <br>
  <!--Below are my buttons for submit and reset which I learned from W3 schools.-->
  <div id="buttons">
  <button onclick="location.href='details.php'" type="button">Return to Previous Page</button>&nbsp &nbsp&nbsp&nbsp
   <button type="submit" value="Submit">Submit<br> <span>(You will know be redirected to the Log In Page)</span></button>&nbsp &nbsp&nbsp&nbsp
    <button type="reset" value="Reset">Reset</button>
  </div>
  </form>
