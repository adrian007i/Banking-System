$(document).ready(function(){
	$('input').mouseenter(function (){
			$(this).css("background-color", "pink");
	});
	
	$('input').mouseleave(function (){
			$(this).css("background-color", "white");
	});
	
		
	$('#navMenu a').mouseenter(function (){
		$(this).css("background-color", "#A58790");
	});	
		
	$('#navMenu a').mouseleave(function (){
		$(this).css("background-color"," #92959F");
	});
	
	$('a,button').mouseenter(function (){
		$(this).css('box-shadow', '0px 8px 16px 0px rgba(0, 0, 0, 1)');
	});
	
	$('a,button').mouseleave(function (){
		$(this).css('box-shadow', 'none');
	});
	
	$('#here').click(function (){
		$('.contact').slideToggle("slow");
	});
	

		
	$("#insert").slideDown("slow");	
		
	});

function validateRegistrationForm(){
	var errorMessages= document.getElementsByClassName("errors");
	for(i=0; i<errorMessages.length;i++){
		errorMessages[i].innerHTML="";
	}

	var email=document.getElementById('email').value.trim();
	var fname=document.getElementById('fname').value.trim();
	var lname=document.getElementById('lname').value.trim();
	var sex=document.getElementsByName('gender');
	var address=document.getElementById('address').value;
	var contact=document.getElementById('phone').value.trim();
	var pass=document.getElementById('reg1pass').value.trim();
	var confirmPass=document.getElementById('reg2pass').value.trim();

	//expressions
	var user_pass_regex = /^[a-zA-Z0-9]{5,12}$/;
	var email_regex=/[a-z0-9._%+-]{5,30}@[a-z0-9.-]{3,15}.[a-z]{2,4}$/
	var name_regex = /^[a-zA-Z]{2,20}$/;
	var add_regex = /^[a-zA-Z0-9 # \s]{5,40}$/;
	var phone_regex =  /^[0-9]\-[0-9]{3}\-[0-9]{3}\-[0-9]{4}$/;
	
	var error=true;
	
		

	
	if(fname==""){
		errorMessages[1].innerHTML="* Required";
		error=false;
	}
	else{
		if(!name_regex.test(fname)){
			errorMessages[1].innerHTML=" invalid first name";
			error=false;
		}
	}
		
	if(lname==""){
		errorMessages[2].innerHTML="* Required";
		error=false;
	}
	else{
		if(!name_regex.test(lname)){
			errorMessages[2].innerHTML=" invalid last name";
			error=false;
		}
	}
	
	if(sex[0].checked==false && sex[1].checked==false){
		errorMessages[3].innerHTML="* Required";
			error=false;
	}

	if(address=="")
		errorMessages[4].innerHTML="* Optional";
	
	else{
		if(!add_regex.test(address)){
			errorMessages[4].innerHTML=" invalid address";
			error=false;
		}
	}
	
	if(contact=="")
		errorMessages[5].innerHTML="* Optional";
	
	else{
		if(!phone_regex.test(contact)){
			errorMessages[5].innerHTML=" format X-XXX-XXX-XXXX";
			error=false;
		}
	}
	if(pass==""){
		errorMessages[6].innerHTML="* Required";
		error=false;
	}
	else{
		if(!user_pass_regex.test(pass)){
			errorMessages[6].innerHTML=" invalid password";
			error=false;
		}
	}
	
	
	if(confirmPass==""){
		errorMessages[7].innerHTML=" password must be confirmed";
		error=false;
	}
	if((confirmPass!="" && pass!="") && confirmPass!= pass ){
		errorMessages[7].innerHTML=" passwords dont match";
		error=false;
	}

	return error;
	}
	
	
function validateContactForm(){
	var name_regex = /^[a-zA-Z-\s]{2,30}$/;
	var name=$("#name").val();
	var msg=$("#nameMessage").val();
	$("#nameMessage").html("");
	
	var email_regex=/[a-z0-9._%+-]{5,30}@[a-z0-9.-]{3,15}.[a-z]{2,4}$/
	var email=$("#email").val();
	var emsg=$("#emailMessage").val();
	$("#emailMessage").html("");
	
	if (!name_regex.test(name)){
		$("#nameMessage").html("* Invalid Name");
		return false;
	}
	if (!email_regex.test(email)){
		$("#emailMessage").html("* Invalid Email");
		return false;
	}
	alert("Message Sent :)");
	return true;
	
}

function myFunction() {
    var x = document.getElementById("reg1pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function myFunction2() {
    var x = document.getElementById("reg2pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myFunction3() {
    var x = document.getElementById("logpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}




