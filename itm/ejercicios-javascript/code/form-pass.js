function validar()
{
    if (document.form3.text1.value.length < 5)
    {
        alert("Ingrese al menos 5 caracteres");
        document.form3.text1.value = "";
    }
}