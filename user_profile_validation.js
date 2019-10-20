function validateUserUpdateProfile(){
    var userName = document.userProfile.name.value;
    var userPassword = document.userProfile.password.value;
    var userMobile = document.userProfile.mobile.value;
    
    if(userPassword.length > 5 || userPassword < 11){
         alert ('Password length should be more then 5 and less then 11');                        
         return false;
    }
    else if(isNaN(userMobile)){
         alert ('Mobile no. should be a number');
         return false;
    }
    else if(userMobile.length > 10 || userMobile.length < 10){
         alert ('Mobile no. should contain 10 digit only');
         return false;
    }
    else if(isNaN(userName)){
        return true;
    }
     else{
         alert ('Name should have alphabet value ');
         return false;
    } 
}