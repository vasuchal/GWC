
<html>
<head>
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="index1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
      font-family: "Times New Roman", Times, serif;
      background-color:white;
    }
    
h1{
	font-size:50px;
	text-align:center;
	color:#800020;
	border-radius:20px;
}

label{
	color:#800020;
	font-family: "Times New Roman", Times, serif;
}

#sub{
	font-family: "Times New Roman", Times, serif;
}

p{
	text-align:center;
}

h1,p{	animation: fade 4s 1;

}

/* Set a style for all buttons */
button {
    font-family: "Times New Roman", Times, serif;
    background-color: #800020;
    color: white;
    padding: 14px 50px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 300px;
    border-radius:15px;
    font-size:25px;  
    margin:auto;
    
}

button:hover {
    opacity: 0.8;
}

#prog {
  position:absolute;
  top:170px;
  left:185px;
}

#track {
  position:absolute;
  top:170px;
  left:555px;
}

#rec {
  position:absolute;
  top:170px;
  left:910px;
}

#login, #sub{

	animation-name:colorChange;
	animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-delay: 1.5s;

}

@keyframes fade{

	from {
	    opacity:0;
	  }
	to {
    	opacity:1;
	  }	
}

@keyframes colorChange{
	  from{
	  	 background-color:#800020;
  		}
  		
  		50%{
  			background-color:#C70039;
  		
  		
  		}
  		
  		to {
  		 background-color:#800020;
 		 }
 
  	}
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 10px;
    margin: 7px 0;
    display: inline-block;
    box-sizing: border-box;
    color:#800020;
	border: 2px solid #800020; 
	border-radius: 4px;
	font-family: "Times New Roman", Times, serif;

}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #800020;
    font-family: "Times New Roman", Times, serif;

}

/* Center the image and position the close button */

.formContent {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;

}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
    border-radius:20px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    border-radius:20px;

}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn {
       width: 100%;
    }
    a {
    color: white;
	}
}

</style>
</head>
<body>
<h1> CareTaker Login </h1>
<p><button id="login" title="Log In" onclick="document.getElementById('mod').style.display='block'" style="width:auto;">Login</button>
<hr style="height:2px;color:#800020;background-color:#C70039;width:80%;">
<strong><p title="Monitor Progress" id="prog" style="color:#800020;font-size:25px;">Monitor Progress</p></strong>
<strong><p title="Track Location"  id="track" style="color:#800020;font-size:25px;">Track Location</p></strong>
<strong><p title="Receive Alerts" id="rec" style="color:#800020;font-size:25px;">Receive Alerts</p></strong>
<br>
<br>
<br>
<p><img src="data.png" width="250" height="250" alt="Calendar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="track.png" width="250" height="250" alt="brain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="alert.jpeg" width="250" height="250" alt="fam"></p>
<div id="mod" class="modal">

  <form class="modal-content animate" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" method="post">

    <div class="formContent">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label title="user name" for="uname"><b>Username:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input title="Enter user name" type="text" name="username" value="" required>
      <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label title="password" for="psw"><b>Password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input title="enter password" type="password" name="password" value="" required>
      <br>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="Submit" value="Submit" id="sub" style="width:150px;font-size:20px;">Submit</button>
    </div>
    <div class="container" style="background-color:#800020">
     <center> <button title="cancel" type="button" onclick="document.getElementById('mod').style.display='none'" class="cancelbtn">Cancel</button></center>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('mod');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white;" href="patientorcaretaker.html"><button title="return to previous page" style="font-size:15px;width:250px;">Return to previous page</button></a></p>

</body>
</html>
