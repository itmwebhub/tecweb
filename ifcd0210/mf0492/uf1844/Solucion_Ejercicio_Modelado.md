# Modelado del Software - Solucionario

## Ejercicios resueltos

### Ejercicio tipo 1: Comprensión

#### Enunciado

Explica con tus propias palabras:

a) Qué es un modelo de software.

b) Qué es un diagrama.

c) Por qué son importantes durante el desarrollo de software.

#### Solución

a) Un modelo de software es una representación simplificada de un sistema que permite comprenderlo y diseñarlo antes de desarrollarlo.

b) Un diagrama es una representación gráfica utilizada para mostrar información del sistema de forma visual.

c) Son importantes porque facilitan la comunicación entre los miembros del equipo, permiten detectar errores tempranamente y ayudan a planificar el desarrollo.

---

### Ejercicio tipo 2: Identificación o clasificación

#### Enunciado

Indica a qué modelo de arquitectura corresponde cada situación:

1. Procesamiento de imágenes por etapas.
2. Aplicaciones utilizando una base de datos central.
3. Sistema formado por clases y objetos.
4. Programa coordinado por una función principal.

#### Solución

1. Arquitectura de flujo de datos.
2. Arquitectura centrada en datos.
3. Arquitectura orientada a objetos.
4. Arquitectura principal/subprograma.

Explicación:

- La información pasa entre etapas en el flujo de datos.
- La base de datos central es el eje principal del sistema.
- Las clases y objetos caracterizan el paradigma orientado a objetos.
- El programa principal coordina las distintas funciones.

---

### Ejercicio tipo 3: Aplicación práctica

#### Enunciado

Sistema para una clínica.

#### Solución

Paso 1: Identificar necesidades.

- Gestión de pacientes.
- Gestión de citas.
- Consulta de historiales.

Paso 2: Determinar arquitectura.

La arquitectura orientada a objetos es adecuada porque existen entidades claramente diferenciadas.

Paso 3: Definir componentes.

- Componente Pacientes.
- Componente Citas.
- Componente Historiales.
- Componente Base de Datos.

Paso 4: Definir interfaz.

- Aplicación web.
- Formularios de registro.
- Pantallas de consulta.
- Panel de administración.

---

### Ejercicio tipo 4: Análisis

#### Enunciado

Analiza las vistas necesarias para una tienda online.

#### Solución

### Vista de Casos de Uso

Permite identificar:

- Cliente.
- Administrador.
- Funcionalidades como comprar, registrarse o gestionar productos.

### Vista de Diseño

Describe:

- Catálogo.
- Carrito.
- Pedidos.
- Usuarios.

### Vista de Interacción

Muestra cómo se comunican cliente, sistema y base de datos.

### Vista de Implementación

Representa módulos, paquetes y componentes software.

### Vista de Despliegue

Representa servidores web, aplicaciones y bases de datos donde se ejecutará el sistema.

---

### Ejercicio adicional 1

#### Solución

- Sistema software → c
- Modelo → d
- Diagrama → a
- Vista → b

Explicación:

- El sistema software es el producto completo.
- El modelo simplifica la realidad.
- El diagrama representa visualmente la información.
- La vista muestra una perspectiva específica.

---

### Ejercicio adicional 2

#### Solución

Ejemplo para reservas hoteleras:

Componente Cliente

- Gestiona información de usuarios.

Componente Reserva

- Gestiona reservas de habitaciones.

Componente Facturación

- Gestiona cobros y pagos.

Cada componente tiene responsabilidades claramente definidas para favorecer el mantenimiento.

---

### Ejercicio adicional 3

#### Solución

### Vista de Casos de Uso

Mostrará:

- Estudiante.
- Personal administrativo.
- Acciones de matriculación.

### Vista de Diseño

Mostrará:

- Clases Alumno.
- Clase Asignatura.
- Clase Matrícula.

### Vista de Despliegue

Mostrará:

- Servidor web.
- Servidor de aplicaciones.
- Base de datos universitaria.

---

## Preguntas de reflexión (Posibles respuestas orientativas)

### 1. ¿Por qué resulta más económico detectar errores durante el modelado?

Porque modificar diagramas es más rápido y barato que modificar software ya implementado.

### 2. ¿Puede un mismo sistema representarse mediante varias vistas?

Sí. Cada vista muestra diferentes aspectos adaptados a distintos interesados del proyecto.

### 3. ¿Qué ventajas aporta una arquitectura orientada a objetos?

- Reutilización.
- Modularidad.
- Mantenimiento más sencillo.
- Mejor organización del código.

### 4. ¿Qué problemas surgirían sin modelos ni diagramas?

- Malentendidos.
- Errores de diseño.
- Incremento de costes.
- Mayor dificultad de mantenimiento.

### 5. ¿Qué vista considerarías más útil para un desarrollador?

Respuesta abierta. Habitualmente las vistas de diseño e implementación son las más utilizadas porque describen cómo construir el sistema.

---

## Resumen final

- El modelado del software permite comprender y diseñar sistemas antes de programarlos.
- Los modelos simplifican la realidad.
- Los diagramas representan gráficamente la información.
- Las vistas muestran distintos aspectos del sistema.
- Existen varias arquitecturas: centrada en datos, flujo de datos, principal/subprograma y orientada a objetos.
- Los componentes representan funcionalidades del sistema.
- Las interfaces permiten la interacción con usuarios y sistemas externos.
- Un buen modelado reduce errores y mejora la calidad del software.