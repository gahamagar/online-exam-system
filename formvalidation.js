function validateForm()
		{
			var error=0;
			var fname=document.registerForm.name.value;
			var password=document.registerForm.password.value;
			var phone=document.registerForm.phone.value;
			var email=document.registerForm.email.value;            
			msg="";


			//Name validation
			var npattern=/^([A-Za-z])+$/;
			if(fname=="")
			{
				document.getElementById("err_name").innerHTML="Name is blank";
				error++;
			}

			else if(fname.length>40)
			{
				document.getElementById("err_name").innerHTML="Can't accept more than 40 character";
				error++;
			}
			else if(!npattern.test(fname))
			{
				document.getElementById("err_name").innerHTML="Only Character accept";
				error++;
			}
			else
			{
				document.getElementById("err_name").innerHTML="";
				msg+="Full Name is="+fname+"<br>";
			}

            //email validation
			var mailformat=/^([A-Za-z0-9\.-]+)@([A-Za-z0-9-]+).([A-Za-z]){2,4}$/;
			if(email=="")
			{
				document.getElementById("err_email").innerHTML="Email is blnak";
				error++;
			}
			else
			{
				if(!mailformat.test(email))
				{
					document.getElementById("err_email").innerHTML="Enter valid email";
					error++;
				}
				else{
					document.getElementById("err_email").innerHTML="";
					msg+="Email is"+email+"<br>";
				}
			}
			
			//Passwowrd validation
			var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
			if(password=="")
			{
				document.getElementById("err_pass").innerHTML="Password should not blank";
				error++;
			}
			else
			{
				 if(!passw.test(password))
				{
					document.getElementById("err_pass").innerHTML="Input Password should [6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter]";
					error++;
				}
				else
				{
					document.getElementById("err_pass").innerHTML="";
					msg+="Password is="+password+"<br>";
				}
			}
			if(repassword=="")
			{
				document.getElementById("err_repass").innerHTML="Repassword is blank";
				error++
			}
			else{
				if(repassword!=password)
				{
					document.getElementById("err_repass").innerHTML="Password does not match";
					error++;
				}
				else
				{
					document.getElementById("err_repass").innerHTML="";
					msg+="Repassword is"+repassword+"<br>";
				}
			}
			//Phone validation
			var ppattern=/^([0-9]{10}$)/;
			if(phone=="")
			{
				document.getElementById("err_phone").innerHTML="Phone should not be blank";
				error++;
			}
			else
			{
				if(!ppattern.test(phone))
				{
					document.getElementById("err_phone").innerHTML="At leaset 10 number";
					error++;
				}
				else{
					document.getElementById("err_phone").innerHTML="";
					msg+="Phone no is="+phone+"<br>";
				}
			}
			
	
			//validation for checkbox
			if(document.registerForm.term.checked==false)
			{
				document.getElementById("err_term").innerHTML="Please check on I accept Term and Condition";
				error++;
			}

			if(error>0)
			{
				return false;
			}
			else
				document.write(msg);

}