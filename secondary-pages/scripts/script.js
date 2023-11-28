function verifymessageform(){
    var nomprenom = document.querySelector("#nomprenom");
    var telephone = document.querySelector("#telephone");
    var emailbis = document.querySelector("#emailbis");
    var message = document.querySelector("#message");
    console.log(nomprenom.value);
    console.log(telephone.value);
    console.log(telephone.value.length);
    console.log(emailbis.value);
    console.log(message);
    if(nomprenom.value == ""){
        document.getElementById('erreurnomprenom').innerHTML = "Type your name !";
        var element = document.getElementById('erreurnomprenom');
        element.classList.add("alert-danger");
        element.style.display = "block";
    }else{
        erreurnomprenom.style.display = "none";
    }
    if(telephone.value.length != 10){
        document.getElementById('erreurtelephone').innerHTML = "Invalid phone number !";
        var elementtel = document.getElementById('erreurtelephone');
        elementtel.classList.add("alert-danger");
        elementtel.style.display = "block";
    }else{
        erreurtelephone.style.display = "none";  
    }
    if(emailbis.value == ""){
        document.getElementById('erreuremail').innerHTML = "Invalid email address !";
        var elementmail = document.getElementById('erreuremail');
        elementmail.classList.add("alert-danger");
        elementmail.style.display = "block";
    }else{
        erreuremail.style.display = "none";
    }
    if(message.value == ""){
        document.getElementById('erreurmessage').innerHTML = "Type at least 2 words !";
        var elementmessage = document.getElementById('erreurmessage');
        elementmessage.classList.add("alert-danger");
        elementmessage.style.display = "block";
    }else{
        erreurmessage.style.display = "none";
    }
}
