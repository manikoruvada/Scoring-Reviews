function msg() {
    alert("Hello !");
}

//UserName validation
//For User name ( minLength 6 and maxLength 15 ) 
function userName() {
    var name=document.getElementById("user").value;
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
    var password=document.getElementById("passwd").value;
    
    if(/[A-Z]/.test(password) && /[0-9]/.test(password) && /[a-z]/.test(password) && /[\W]/.test(password) && password.length>6){
        return true;
    }else{
        return false;
    }
}

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
    var phone=document.getElementById("phone").value;
    if(phone.match(/\d{10}$/)){
        document.getElementById("pherror").innerHTML=" <img src='checked.gif'/>";  
        return true;
    }else{
        document.getElementById("pherror").innerHTML=" <img src='unchecked.gif'/>&nbsp;<small>Enter valid phone number</small>";  
        return false;
    }
}
//Registration page validation 
function registerValidate() {
    var first=firstName();
    var last=lastName();
    var phoneNo=phoneNumber();
    var user=userName();
    var password=passwordValidate();
    if(first==false || last==false || phoneNo==false || user==false||password==false){
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

	

