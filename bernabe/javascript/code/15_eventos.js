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