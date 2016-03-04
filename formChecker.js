// JavaScript Document

var passField = "";
var userField = "";

function Validate(form) 
{
    if (document.getElementById('c').checked || document.getElementById('b').checked || document.getElementById('a').checked){
		userField = form.user_name.value;
		textField = form.pass_word.value;
		
		if(textField !== "" && userField !== ""){
			return true;			
		}
		else{
			alert("Be sure that the password and username fields are not blank");
	   		 return false;
		}
    }
    else{
		alert("Be sure that a shipping method is selected.");
		return false;
    }
}


