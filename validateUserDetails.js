function userDetailValidate(){
                    var mobile = document.signup.mobile.value;
                    var pass = document.signup.password.value;
                    var confirmPassword = document.signup.confirmPassword.value;
                    var name = document.signup.name.value;
                    if(isNaN(mobile)){
                        alert ('Mobile no. should be a number');
                        contact.focus();
                        return false;
                    }
                    else if(mobile.length > 10 || mobile.length < 10){
                        alert ('Mobile no. should contain 10 digit only');
                        contact.focus();
                        return false;
                    }
                    else if(pass.length > 10 || pass.length < 6 ){
                        alert ('Password length should be more then 5 and less then 11');
                        myInput.focus();
                        return false;
                    }
                    else if(pass != confirmPassword){
                        alert ('Password does not match');
                        confirmPasswordInput.focus();
                        return false;
                    }
                    else if(isNaN(name)){
                        return true;
                    }
                    else{
                        alert ('Name should have alphabet value ');
                        fname.focus();
                        return false;
                    } 
                        
                }
function myFunction(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if(x.type === "password"){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
        function confirmPasswordFunction(){
        var x = document.getElementById("confirmPasswordInput");
        var y = document.getElementById("hideeye1");
        var z = document.getElementById("hideeye2");
        if(x.type === "password"){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }