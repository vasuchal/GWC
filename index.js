function Disclaimer(){
				document.getElementById("disclaimer").innerHTML = "<p>&nbsp&nbspDisclaimer: Recollect is not a medical application or site, and is simply a prototype. It will not help one improve or cure the chronic medical condition of Alzheimer's. Its purpose is to enhance the quality of life for those affected by Alzheimer's directly and indirectly. Recollect will not be responsible for any personal damage caused by the website or its dependents, and neither will we be liable for any damage to electronic equipment which is involved with our programs. By using this product, users understand and agree to the guidelines for use detailed above. The Recollect team maintains this website tofacilitate the lives of those afflicted with Alzheier's and their caretakers. This is a service that is continually under development. We will make every effort to keep this site current and to correct errors brought to our attention. The documents on this site contain links to information created and maintained by other public and private organizations. Please be aware that we do not control or guarantee the accuracy, relevance, timeliness, or completeness of this outside information. Further, the inclusion of links to particular items is not intended to reflect their importance, nor is it intended to endorse any views expressed or products or services offered by the author of the reference or the organization operating the site on which the reference is maintained. Translations of any materials into languages other than English are intended solely as a convenience to the non-English-reading public and are not legally binding. We have attempted to provide an accurate translation of the original material in English, but due to the nuances in translating to a foreign language, slight differences may exist. References identifying the original document in English are&nbsp&nbsp available in most non-English documents.&nbsp&nbsp</p><br>"
				document.getElementById("disclaimer").style.fontSize = "10px";
				document.getElementById("disclaimer").style.visibility = "visible";
				

		}
		
		
//this is my function that checks if password and confirmation match

function Confirm(){

//this gets the values of the two input boxes of password and then the confirmation using document.getElementById

	var Pass = document.getElementById("password").value;
	var confirmPass = document.getElementById("confirmation").value;
	
	//using an if loop, it checks if they are not equal
	//the string() converts to a string just in case
	 if(String(Pass) !== String(confirmPass)){
	//if they are not equal, then the paragraph tag with id confirmationMessage  prints the below message in the color red
	document.getElementById("confirmationMessage").innerHTML = "*Password confirmation is not matched, do not submit!*";
	document.getElementById("confirmationMessage").style.color= "Tomato";
	}
else if (String(Pass) == String(confirmPass)){
	//if they are  equal, then the paragraph tag with id confirmationMessage  prints the below message in the color green

	document.getElementById("confirmationMessage").innerHTML = "*Password is matched, please click submit!*";
	document.getElementById("confirmationMessage").style.color= "MediumSeaGreen";


	}


}

