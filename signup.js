function validates()
	{
		var id = document.getElementById("userid");
		var p = document.getElementById("pass");
		var ph = document.getElementById("phn");
		var e = document.getElementById("emailid");
			 if (id.value == "")
			 {
			 	window.alert("Enter your UserId !! ");
			 	id.style.background='Red';
			 	id.focus();
			 	return false;
			 }
			 if(id.value != "")
			 {
			 	id.style.background="White";
			 }
		
			 if ( p.value == "")
			 {
			 	window.alert("Enter the password !!  ");
			 	p.style.background="Red";
			 	p.focus();
			 	return false;
			 }
			 if(p.value != "")
			 {
			 	p.style.background="White";
			 }
		
			 if ( e.value == "")
			 {
			 	
			 	window.alert("Enter the email ID !!  ");
			 	e.style.background="Red";
			 	e.focus();
			 	return false;
			 }
			 if(e.value != "")
			 {
			 	e.style.background="White";
			 }

			 if ( ph.value == "")
			 {
			 	window.alert("Enter the Phone no. !!  ");
			 	ph.style.background="Red";
			 	ph.focus();
			 	return false;
			 }
			 if(ph.value != "")
			 {
			 	ph.style.background="White";
			 }
	}