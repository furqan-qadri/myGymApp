
    function validation()  
{  
    var Email=document.formLogin.Email.value;  
    var Password=document.formLogin.Password.value;   
    if(Email.length=="" && Password.length=="") {  
        alert("User Email and Password fields are empty");  
        return false;  
    }  
    else  
    {  
        if(Email.length=="") {  
            alert("User Email is empty");  
            return false;  
        }   
        if (Password.length=="") {  
        alert("Password field is empty");  
        return false;  
        }  
    }                             
}  


