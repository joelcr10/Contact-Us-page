function validatePhone()
{
    var phn = document.getElementById("PhoneNumber");
    var phoneno = /^\d{10}$/;
    if(!phn.value.match(phoneno))
    {
        document.getElementById("phonePrompt").style.color = "red";
        document.getElementById("phonePrompt").innerHTML = "Enter 10 digits";
    }
    else
        {
            document.getElementById("phonePrompt").innerHTML = "";
        }
}

function validateEmail()
{
    var em = document.getElementById("email");
    //var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email = /\S+@\S+\.\S+/;
    if(!em.value.match(email))
        {
           // document.getElemntById("emailPrompt").style.color = "red";
            document.getElementById("emailPrompt").innerHTML = "Invalid email format";  
            document.getElementById("emailPrompt").style.color = "red";
        }
    else
        {
            document.getElementById("emailPrompt").innerHTML = "";
        }

}
