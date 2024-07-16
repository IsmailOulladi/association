function is_majuscule_letter(inputtxt){
   	var letters = /^[A-Z][a-z]+$/;
   	if(inputtxt.value.match(letters)) return true;
    else return false;
   
}
function check_first_name(){
	var input=document.getElementById("nom");
	if ( !is_majuscule_letter(input)){
		//alert("nom doit être alphabétique et en majuscule");
		msg_error_nom.style.visibility="visible";
	}
	else msg_error_nom.style.visibility="hidden";
}

function check_last_name(){
	var input=document.getElementById("prenom");
	if ( !is_majuscule_letter(input)){
		msg_error_prenom.style.visibility="visible";
	}
	else msg_error_prenom.style.visibility="hidden";
}