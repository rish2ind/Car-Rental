function validate() {
            var card = document.payment.cnumber.value;
                    var cvv = document.payment.ccvv.value;
                    if(isNaN(card)){
                        alert ('Card number should contain numeric digit only !');
                        cnumber.focus();
                        return false;
                    }
                    else if(card.length > 16 || card.length < 16){
                        alert ('Card number should contain 16 digits only');
                        cnumber.focus();
                        return false;
                    }
                    else if(isNaN(cvv)){
                        alert ('CVV should be a number');
                        ccvv.focus();
                        return false;
                    }
                    else if(cvv.length > 3 || cvv.length < 3 ){
                        alert ('CVV should contain 3 digits only');
                        ccvv.focus();
                        return false;
                    }
                    
                    else{
                        true;
                    } 
            
        }

