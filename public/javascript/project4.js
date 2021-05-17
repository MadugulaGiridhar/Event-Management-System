function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// Contact page Validation

function contactValidation() {

  var contactName = document.getElementById("Tu_Nombre");
  var contactEmail = document.getElementById("Tu_Correo");
  var query = document.getElementById("input1");


  var contactName1=contactName.value;
  var contactEmail1=contactEmail.value;
  var query1 = query.value;

  if(contactName1 === '')
  {
    alert("Enter Name .Please try again! ");
    return false;
  }

  if(contactEmail1 === '')
  {
    alert("Enter email .Please try again! ");
    return false;
  }
  if(query1 === '')
  {
    alert("Enter Query .Please try again! ");
    return false;
  }
}

// Contact page Validation

// Signup Page Validation

function checkPassword(){ 

				
				
                var password1 = document.getElementById("psw");
                var password2 = document.getElementById("psw-repeat");
                var e1 = document.getElementById("email1");

                var p1=password1.value;
                var p2=password2.value;
                var e2=e1.value;
                if(e2 === '')
                {
                  alert("enter email.Please try again! ");
                  return false;
                }
                
                if(p1 === '')
                {
                  alert("enter password.Please try again! ");
                  return false;
                }
                if(p2 === '')
                {
                  alert("enter password.Please try again! ");
                  return false;
                }
                if(p1.length <8){
                  alert("value is less than 8");

                }
                if ( p1!=p2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(e1.value.match(mailformat))
                {
                  // return true;
                }
                else
                {
                alert("You have entered an invalid email address!");
                return false;
                }
                
            } 

            function loginpage1() {

              var password1 = document.getElementById("psw");
              var usrname = document.getElementById("usrname");  
                

                var p1=password1.value;
                
                var usrname1=usrname.value;
                if(usrname1 === '')
                {
                  alert("enter usrname.Please try again! ");
                  return false;
                }
                
                if(p1 === '')
                {
                  alert("enter password.Please try again! ");
                  return false;
                }

            }