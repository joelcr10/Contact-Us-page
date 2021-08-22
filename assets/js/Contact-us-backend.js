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