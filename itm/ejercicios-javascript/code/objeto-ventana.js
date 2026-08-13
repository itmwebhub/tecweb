function cerrar()
{
    window.close();
}

function abrir()
{
    var ventana = open();
    ventana.document.write("Estoy escribiendo en la nueva ventana<br>");
    ventana.document.write("Segunda línea");
}

function abrirParametros()
{
    var ventana = open("","","status=yes,width=400,height=250,menubar=yes");
    ventana.document.write("Esto es lo primero que aparece<br>");
    ventana.document.write("Segunda línea");
}

function abrirScreen()
{
    document.write('Valores de las propiedades del objeto "Screen:" ',"<br>");
    document.write("AvailHeight: "+ screen.availHeight+ "<br>");
    document.write("AvailWidth: "+ screen.availWidth+ "<br>");
    document.write("height: "+ screen.height+ "<br>");
    document.write("width: "+ screen.width+ "<br>");
    document.write("colorDepth: "+ screen.colorDepth);
    }

function mostrarAlerta()
{
    alert("Esta ventana de alerta ya la utilizamos en otros problemas.");
}

function confirmar()
{
    var respuesta=confirm("Presione alguno de los dos botones");
    if(respuesta ==true)
        alert('Presionó "Aceptar"');
    else
        alert('presionó "cancelar"');
}

function cargarCadena()
{
    var cad=prompt("Cargue una cadena:","");
    alert("Usted ingresó: "+cad);
}

function mostrarPlugins() 
{ 
    document.write("Valores de las propiedades del objeto navigator: <br>"); 
    document.write("appName: " + navigator.appName + "<br>"); 
    document.write("appVersion: " + navigator.appVersion + "<br>"); 
    document.write("cookieEnabled: " + navigator.cookieEnabled + "<br>"); 
    document.write("plugins: " + navigator.plugins.length + "<br>");
}
