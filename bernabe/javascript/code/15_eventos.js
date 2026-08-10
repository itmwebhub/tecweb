var contador = 0;

function incrementar(){
    contador++;
    alert("El valor de la variable contador es: " + contador);
}

function decrementar(){
    contador--;
    alert("El valor de la variable contador es: " + contador);
}

function mostrar(){
    var nombre = document.form2.nombre.value;
    var edad = document.form2.edad.value;

    alert('El nombre es: ' + nombre + ' y la edad es: ' + edad);
}

function validarPass(){
    var contrasena = document.form3.contrasena.value;

    if(contrasena.length < 5){
        alert('La contraseña debe tener minimo 5 caracteres');
    } else{
        alert('La contraseña es correcta');
    }
}

function datosColores(){
    var inputnumero = document.getElementById('numero');
    var inputcolor = document.getElementById('color');
    var inputvalor = document.getElementById('valor');

    inputnumero.value = document.form4.select1.selectedIndex
    inputcolor.value = document.form4.select1.options[document.form4.select1.selectedIndex].text;
    inputvalor.value = document.form4.select1.options[document.form4.select1.selectedIndex].value;
}