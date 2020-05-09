function Username(user){ 
    var regex = /^[a-z_.]{8,12}$/;
    if(user.match(regex)){ 
        console.log('Username is Valid')
        return true;
    } else { 
        console.log('Username is Invalid')
        return false;
    }
}
Username("john.smith");
Username("johnsmith26")

function Password(pass){
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{9,9}$/;
    if(pass.match(regex)){ 
        console.log('Password is Valid')
        return true;
    } else { 
        console.log('Password is invalid')
        return false;
    }
}
Password("JOHNsmith");
Password("j0hn5m!tH");
