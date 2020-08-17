<!DOCTYPE html>

<html>
	<head>
 	 <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
 	 <link href="index1.css" rel="stylesheet" type="text/css"/>
	 <!-- <script src="website.js"></script>-->
  	<style>
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
		<h1 style="color:#800020;font-size:40px;text-align:center;">About Recollect</h1>
		<div id="indexHomepage"> 
			<br>
			<p> <strong>Recollect</strong> is an interactive tool for Alzheimers patients and their caregivers to facilitate their everyday activities.
			<strong>Recollect</strong> helps patients in a variety of activities ranging from reminding them to take their medicine to arranging their shopping lists.
			Patients with Alzheimers often feel isolated and scared. <strong>Recollect</strong> is a steady companion to Alzheimers patients in the beginning to middle stages of their conditions.</p>
			<p>You are using <strong>Recollect</strong>, an application to help you go about your daily life. Recollect keeps track of your tasks, reminders, and location. It allows you to connect with
		 	your caretaker from anywhere that you might be, and gives you the freedom to continue with your life, even after your diagnosis.</p>
			<button style="font-size:20px;color:#800020;border-radius:20px;" onclick="Disclaimer()"> <strong>Disclaimer</strong> </button>
			<br>
			<br>
			<div id="disclaimer">
			</div>
		</div>
	<script>

		function Disclaimer(){
				document.getElementById("disclaimer").innerHTML = "<p>&nbsp&nbspDisclaimer: Recollect is not a medical application or site, and will not help you improve or cure the chronic medical condition of Alzheimer's. Its purpose is to enhance the quality of life for those affected by Alzheimer's directly and indirectly. Recollect will not be responsible for any personal damage caused by the website or its dependents, and neither will we be liable for any damage to electronic equipment which is involved with our programs. By using this product, users understand and agree to the guidelines for use detailed above. The Recollect team maintains this website tofacilitate the lives of those afflicted with Alzheier's and their caretakers. This is a service that is continually under development. We will make every effort to keep this site current and to correct errors brought to our attention. The documents on this site contain links to information created and maintained by other public and private organizations. Please be aware that we do not control or guarantee the accuracy, relevance, timeliness, or completeness of this outside information. Further, the inclusion of links to particular items is not intended to reflect their importance, nor is it intended to endorse any views expressed or products or services offered by the author of the reference or the organization operating the site on which the reference is maintained. Translations of any materials into languages other than English are intended solely as a convenience to the non-English-reading public and are not legally binding. We have attempted to provide an accurate translation of the original material in English, but due to the nuances in translating to a foreign language, slight differences may exist. References identifying the original document in English are&nbsp&nbsp available in most non-English documents.&nbsp&nbsp</p><br>"
				document.getElementById("disclaimer").style.fontSize = "10px";
				document.getElementById("disclaimer").style.visibility = "visible";
				

		}

	</script>
	</body>
</html>