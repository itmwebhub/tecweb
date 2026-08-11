function validar()
{
    if (document.form3.text1.value.length < 5)
    {
        alert("Ingrese al menos 5 caracteres");
        document.form3.text1.value = "";
    }
}
function verPassword()
{
    if (document.form3.text1.type == "password")
    {
        document.form3.text1.type = "text";
    }
    else
    {
        document.form3.text1.type = "password";
    }
}