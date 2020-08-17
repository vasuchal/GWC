<!DOCTYPE html>

<html>
	<head>
 	 <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
 	 <link href="index1.css" rel="stylesheet" type="text/css"/>
	 <script src="index.js"></script>
  	<style>
  	   #indexHomepage{ 
            animation: fadeInAnimation ease 2s; 
            animation-iteration-count: 1; 
            animation-fill-mode: forwards; 
        } 
        @keyframes fadeInAnimation { 
            from { 
                opacity: 0; 
            } 
            to { 
                opacity: 1; 
            } 
        } 
        
        p, button{ 
            animation: fadeInAnimation2 ease 5s; 
            animation-iteration-count: 1; 
            animation-fill-mode: forwards; 
        } 
        @keyframes fadeInAnimation2 { 
            from { 
                opacity: 0; 
            } 
            to { 
                opacity: 1; 
            } 
        } 
        
  	  h1{
  		animation-name:test;
  		animation-duration: 3s;
 
  		}
 
  	@keyframes test{
	  from{
	  	 margin-left:100%;
 		 width:20%
  		}
  		to {
  		 margin-left:0%;
 		 width:100%
 		 }
 
  	}
  	  
  	  div.topnav {
    	box-shadow: 0px 6px 6px grey;
   		height: 48px;
	    }
  
	  #disclaimer{
	  	background-color:white;
		color:#800020;
		text-align:center;
		visibility: hidden;
		width: 70%;
		height:100px;
		margin:auto;
		border-radius: 10px;
		overflow: scroll;

		}
  		button{
  			background-color: white;
  			padding: 15px 32px;
  			text-align: center;
  			display: inline-block;
  			transition-duration: 0.4s;
  			border: none;
  			color:#800020;
  		}
  		
  		button:hover{
  			background-color:#C70039;
  			color:white;
  		}
  		
	</style>
	<div class="topnav">
	    <a title="home page" class ="active" href="index.php"><img src="home.png" width="20" height="20" alt="Planets"></a>
	    <a title="alerts" href="alerts.html">Alerts</a>
	    <a title="location" href="location.html">Location</a>
	    <a title="data" href="data.html"> Data</a>
	    <a title="About" href="about.html"><img src="plus.jpeg" width="30" height="30" alt="Plus"></a>
	    <a id="Add" href="signup.html">Logout</a>
	</div>


	</head>
	<body>
	<?php
		echo"<h1 style='color:#800020;font-size:40px;text-align:center;'>About Recollect</h1>";
		
		?>
		
		<div id="indexHomepage"> 
			<br>
			<p> <strong>Recollect</strong> is an interactive tool for Alzheimers patients and their caregivers to facilitate their everyday activities.
			<strong>Recollect</strong> helps patients in a variety of activities ranging from reminding them to take their medicine to arranging their shopping lists.
			Patients with Alzheimers often feel isolated and scared. <strong>Recollect</strong> is a steady companion to Alzheimers patients in the beginning to middle stages of their conditions.</p>
			<p>You are using <strong>Recollect</strong>, an application to help you go about your daily life. Recollect keeps track of your tasks, reminders, and location. It allows you to connect with
		 	your caretaker from anywhere that you might be, and gives you the freedom to continue with your life, even after your diagnosis.</p>
			<button style="font-size:20px;border-radius:20px;" onclick="Disclaimer()"> <strong>Disclaimer</strong> </button>
			<br>
			<br>
			<div id="disclaimer">
			</div>
		</div>
	
	</body>
</html>