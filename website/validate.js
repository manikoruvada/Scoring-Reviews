

//UserName validation
//For User name ( minLength 6 and maxLength 15 ) 
function userName() {
    var name=document.getElementById("uname").value;
    if(name.length<6 || name.length>15) {  
        document.getElementById("uerror").innerHTML="<img src='unchecked.gif'/>&nbsp;<small>Enter valid username</small>";  
        return false;  
    }else{
        document.getElementById("uerror").innerHTML=" <img src='checked.gif'/>";  
        return true;
    } 
}

//Password Validation
//For Password ( atleast one Uppercase and Lowercase and Number and SpecialCharacter and minLength 6 ) 
function passwordValidate() {
    var password=document.getElementById("password").value;
    
    if(/[A-Z]/.test(password) && /[0-9]/.test(password) && /[a-z]/.test(password) && /[\W]/.test(password) && password.length>6){
		document.getElementById("perror").innerHTML=" <img src='checked.gif'/>"; 
        return true;
    }else{
		document.getElementById("perror").innerHTML="<img src='unchecked.gif'/>&nbsp;<small>Enter valid password</small>"; 
        return false;
    }
}

/*//Email validation
function emailValidate() {
    var email=document.getElementById("email").value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        document.getElementById("eerror").innerHTML="<img src='unchecked.gif'/>&nbsp;<small>Enter valid email</small>";
        return false;
    }else{
        document.getElementById("eerror").innerHTML="<img src='checked.gif'/>";
        return true;
    }
}*/

//First name Validation 
//Contains only Characters [A-Z] and [a-z] 
function firstName() {
    var firstName=document.getElementById("fname").value;
    //alert(firstName);
    if(/[0-9]/.test(firstName) || /[\W]/.test(firstName) || firstName.length<1){
        document.getElementById("ferror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }else{
        document.getElementById("ferror").innerHTML="<img src='checked.gif'/>";
        return true;
    }
}
//Last name Validation 
//Contains only Characters [A-Z] and [a-z] 
function lastName() {
    var lastName=document.getElementById("lname").value;
    //alert(lastName);
    if(/[0-9]/.test(lastName) || /[\W]/.test(lastName) || lastName.length<1){
        document.getElementById("lerror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }else{
        document.getElementById("lerror").innerHTML="<img src='checked.gif'/>";
        return true;
    }
}

//Phone number validation 
function phoneNumber(){
    var phone=document.getElementById("phonenumber").value;
    if(phone.match(/\d{10}$/)&&/^[7-9]/.test(phone)){
        document.getElementById("phnerror").innerHTML=" <img src='checked.gif'/>";  
        return true;
    }else{
        document.getElementById("phnerror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter valid phone number</small>";  
        return false;
    }
}
//Contains only Characters [A-Z] and [a-z] 
function specialization() {
    var firstName=document.getElementById("special").value;
    //alert(firstName);
    if(/[0-9]/.test(firstName) || /[\W]/.test(firstName) || firstName.length<1){
        document.getElementById("serror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }else{
        document.getElementById("serror").innerHTML="<img src='checked.gif'/>";
        return true;
    }
}
//Contains only Characters [A-Z] and [a-z] 
function qualification() {
    var firstName=document.getElementById("qualification").value;
    if( firstName.length<25 && firstName.length>=2){
        
        document.getElementById("qerror").innerHTML="<img src='checked.gif'/>";
        return true;
    }else{
        document.getElementById("qerror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter Characters only</small>";  
        return false;
    }
}
//Registration page validation 
function registerValidate() {
    var first=firstName();
    var last=lastName();
    var user=userName();
    var password=passwordValidate();
    var phone=phoneNumber();
    if(first==false || last==false  || user==false||password==false || phone==false){
        return false;
    }
    return true;
}
//Registration page validation for doctor 
function registerValidation() {
    var first=firstName();
    var last=lastName();
    var user=userName();
    var qual=qualification();
    var special=specialization();
    var password=passwordValidate();
   // var phone=phoneNumber();
    if(first==false || last==false  || user==false||password==false || qual==false || special==false ){
        return false;
    }
    return true;
}

//Login page Validation
function loginValidate() {
    var user=userName();
    var password=passwordValidate();
    if(user && password){
        return true;
    }else{
        return false;
    }
}

//Forgot password page validation 
function forgotValidate(){
    var user=userName();
    var password=passwordValidate();
    if(user==false ||password==false) {
        return false;
    }
    return true;
}
//doctor registration page validation
function DoctorValidate(){
	var fname=firstName();
	var lname=lastName();
	var user=userName();
	var pwd=passwordValidate();
   if(fname==false || lname==false || user==false || pwd==false)
   return false;
   else
   return true;
}
	

