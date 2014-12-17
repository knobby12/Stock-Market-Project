$(document).ready(function(){
    $('.error').hide();
    $('#btn').click(function(){
    validateForm();
    return false;
       
});

    function validateForm(){

        var names = $('#nameInput').val();
        var password = $('#passwordInput').val();
        var confirm_password = $('#cpasswordInput').val();
        
        var inputVal = [names, password, confirm_password];

        var inputMessage = ["name", "password", "confirm password"];

         
            if(inputVal[0] == ""){
                
                $('#nameLabel').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');                
            }        

            if(inputVal[1] == ""){
                $('#passwordLabel').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
            }

            if(inputVal[2] == ""){
                $('#cpasswordLabel').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
            } 
            else if(!inputVal[1]==inputVal[2]){
                $('#cpasswordLabel2').after('<span class="error"> Password Mismatch!</span>');
            }       
    }   

return false;
});
