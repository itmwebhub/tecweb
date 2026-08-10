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