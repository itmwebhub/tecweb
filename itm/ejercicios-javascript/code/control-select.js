function cambiarColor()
{
    document.form1.text1.value = document.form1.select1.selectedIndex;

    document.form1.text2.value =
        document.form1.select1.options[document.form1.select1.selectedIndex].text;

    document.form1.text3.value =
        document.form1.select1.options[document.form1.select1.selectedIndex].value;
}

