function contarSeleccionados()
{
    var cant=0;
    if(document.form1.lenguaje1.checked)
        cant++;
    if(document.form1.lenguaje2.checked)
        cant++;
    if(document.form1.lenguaje3.checked)
        cant++;
    if(document.form1.lenguaje4.checked)
        cant++;
    alert("Conoce "+ cant+ " lenguajes");
}







