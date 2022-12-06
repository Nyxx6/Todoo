/*document.getElementById("Register").addEventListener("submit",fuction(e))
{   e.preventDefault
    alert('Form sent')
}*/


function ValidateLogIn(username="",password=""){

   // username=username
    //password=password
    if(username.length>3 && password.length>8)
        {
            document.getElementById("sub").disabled=false
        }
    else document.getElementById("sub").disabled=true
    
    
}

/*function ValidateRegister(email="")
{
    
        emaill=document.getElementById("email")
    var emailpattern= /^[^]+@[^ ]+\.[a-z]{2,3}$/;
        if(emaill.match(emailpattern)
           
           document.getElementById("sub").disabled=false
           
}
*/

function ValidateRegister(email="",username="",password="",confirmpassword="",) {
    
   var emailpattern=/^[^]+@[^ ]+\.[a-z]{2,3}$/;
   var passwordpattern=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    var usernamepattern=/^[A-Za-z][A-Za-z0-9_]{3,14}$/;
    
        if((email.match(emailpattern)) 
           && (password.match(passwordpattern)) 
           && (username.match(usernamepattern)) 
           && (password==confirmpassword) )
           {
           document.getElementById("sub").disabled=false
           }
        else 
           {
           document.getElementById("sub").disabled=true
           }
}





/*  && (password.match(passwordpattern)) 
document.getElementById("ps").onkeyup=function()
{
    un=document.getElementById("un").value.split(" ");
    ps=document.getElementById("ps").value.split(" ");
    if(un.length>2 && ps.length>7) 
        document.getElementById("sub").disabled=false;
    else document.getElementById("sub").disabled=true;
        
}


//register
document.getElementById("Register").addEventListener("submit",function(e))
{ 
                                                     
   if                                                   
  /                                                   
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*  @\w+  ([\.-]?\w+)* (\.\w{2,3})+$/
     .test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
                                                     
                                                     }











////////////////////////*
<script>
function myFunction() {
  // Get the value of the input field with id="numb"
  let x = document.getElementById("numb").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
/////////////////////////////////
<script>
    const specialChars = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    function username()
{
    let x = document.getElementById("numb").value;
    let text;
    if (x="" || containsspecialChars)
        {text="Input not valid";}
    else if (x.length<3 )
        {
            text="Pseudo too short";
        }
    else{
        text="Input"
        }
}
</script>*/