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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #C70039;
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
	animation: emphasize 2s 1;

}



@keyframes emphasize{

	from {
	    font-size:30px;
	  }
	to {
    	font-size:40px;
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
  }

div{
	margin-left:13%;
}

span{
	font-size:9px;

}
</style>
<body>
 
  <h1> Patient Account Information </h1>
  <!--I added a horizontal line because it divides up the different parts of the form and makes it look more clean and organized.-->
  <!--Below is my code for the text-fields, and they ask for Personal Information to place the pizza order. I also connected it to my other html webpage, so that when you click on submit it leads you to a thank you page.-->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" method="post">
   <fieldset>
   <!--I added a legend tag which I learned from W3 schools, and I also learned how to use field-style.-->
    First Name: <input type="text" autofocus required><br>
    Last Name: <input type="text" autofocus required><br>
    <br>
    </fieldset>
    <!--I added another horizontal rule.-->
    <hr style="height:2px;border-width:2;color:#800020;background-color:#C70039">


  <br>
  <!--Below are my buttons for submit and reset which I learned from W3 schools.-->
  <div>
  <button onclick="location.href='details.php'" type="button">Return to Previous Page</button>&nbsp &nbsp&nbsp&nbsp
   <button type="submit" value="Submit">Submit<br> <span>(You will know be redirected to the Log In Page)</span></button>&nbsp &nbsp&nbsp&nbsp
    <button type="reset" value="Reset">Reset</button>
  </div>
  </form>
