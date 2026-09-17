# UML: Diagrama de Casos de Uso

## Objetivos de aprendizaje

Al finalizar este tema, el alumno será capaz de:

1. Comprender el propósito de un diagrama de casos de uso dentro de UML.
2. Identificar actores y funcionalidades de un sistema.
3. Diferenciar las relaciones Include, Extend y Generalización.
4. Representar correctamente las interacciones entre usuarios y sistema.
5. Aplicar buenas prácticas en la elaboración de diagramas de casos de uso.

---

## Introducción teórica

El Diagrama de Casos de Uso es uno de los diagramas más utilizados en UML (Unified Modeling Language). Su objetivo es representar las funcionalidades que ofrece un sistema desde el punto de vista de quienes lo utilizan.

Este tipo de diagrama permite describir qué hace un sistema sin entrar en detalles técnicos sobre cómo lo hace.

### Actores

Los actores representan entidades externas al sistema que interactúan con él.

Pueden ser:

- Personas.
- Sistemas externos.
- Organizaciones.

Ejemplos:

- Cliente
- Administrador
- Cajero
- Sistema de pagos

### Casos de uso

Los casos de uso representan las funcionalidades que ofrece el sistema.

Ejemplos:

- Iniciar sesión.
- Registrarse.
- Realizar una compra.
- Consultar pedidos.

Un actor participa en uno o varios casos de uso.

### Relación Include

La relación Include indica que un caso de uso incorpora obligatoriamente el comportamiento de otro caso de uso.

Ejemplo:

Realizar compra incluye Validar usuario.

Siempre que se realiza una compra se debe validar al usuario.

### Relación Extend

La relación Extend indica que un caso de uso amplía el comportamiento de otro en determinadas circunstancias.

Ejemplo:

Realizar compra puede extenderse con Aplicar descuento.

El descuento solo se aplicará cuando se cumpla una condición.

### Extension Points

Los Extension Points son puntos definidos dentro de un caso de uso donde puede producirse una extensión.

Permiten especificar claramente dónde se inserta el comportamiento adicional.

### Generalización

La generalización permite definir actores o casos de uso que heredan características de otros más generales.

Ejemplo:

Actor general: Usuario

Actores especializados:

- Cliente
- Administrador

Ambos heredan las características de Usuario.

### Buenas prácticas

- No abusar de las dependencias Include y Extend.
- No utilizar Extend para representar simples decisiones o condiciones internas.
- Distinguir claramente entre una funcionalidad propia y una funcionalidad auxiliar.
- Aplicar la comprobación WAVE.

### Comprobación WAVE

WAVE ayuda a validar la calidad de un diagrama de casos de uso.

Aspectos a revisar:

- El diagrama aporta valor.
- Los actores están correctamente identificados.
- Las funcionalidades son comprensibles.
- Las relaciones son necesarias y coherentes.

---

## Conceptos clave

- UML
- Actor
- Caso de uso
- Asociación
- Include
- Extend
- Extension Point
- Generalización
- Funcionalidad del sistema
- Comprobación WAVE

---

## Ejercicios

### Ejercicio tipo 1: Comprensión

#### Enunciado

Explica con tus propias palabras:

a) Qué es un actor.  
b) Qué es un caso de uso.  
c) Cuál es el objetivo principal de un diagrama de casos de uso.

---

### Ejercicio tipo 2: Identificación o clasificación

#### Enunciado

Clasifica los siguientes elementos como Actor o Caso de Uso:

- Cliente
- Realizar pago
- Administrador
- Consultar catálogo
- Sistema de facturación
- Generar informe

---

### Ejercicio tipo 3: Aplicación práctica

#### Enunciado

Para una biblioteca digital se han definido las siguientes funcionalidades:

- Buscar libros.
- Reservar libro.
- Iniciar sesión.
- Solicitar préstamo.

Actores:

- Usuario.
- Bibliotecario.

Indica:

1. Qué actores participan.
2. Qué casos de uso existen.
3. Qué relación Include podría existir.

---

### Ejercicio tipo 4: Análisis

#### Enunciado

Un analista propone modelar las siguientes funcionalidades:

- Realizar pedido.
- Validar cliente.
- Aplicar cupón descuento.

Se plantea:

- Realizar pedido Include Validar cliente.
- Aplicar cupón descuento Extend Realizar pedido.

Analiza si las relaciones propuestas son correctas y justifica tu respuesta.

---

### Ejercicio adicional 1

#### Enunciado

Indica si las siguientes afirmaciones son verdaderas o falsas:

1. Un actor siempre es una persona.
2. Include representa comportamiento obligatorio.
3. Extend representa comportamiento opcional.
4. Un caso de uso describe la implementación técnica de una función.

---

### Ejercicio adicional 2

#### Enunciado

Diseña conceptualmente un diagrama de casos de uso para una tienda online que permita:

- Registrarse.
- Iniciar sesión.
- Comprar productos.
- Gestionar pedidos.

Identifica actores y casos de uso.

---

### Ejercicio adicional 3

#### Enunciado

Un sistema académico tiene los actores:

- Alumno
- Profesor
- Coordinador

Sabiendo que Profesor y Coordinador comparten varias funcionalidades del sistema, explica cómo podrías utilizar una relación de Generalización.

---

### Ejercicio adicional 4

#### Enunciado

Revisa el siguiente caso:

"Generar PDF" se ha modelado como Include de "Generar informe".

¿Consideras adecuada esta decisión? Razona tu respuesta.

---

## Preguntas de reflexión

1. ¿Por qué es importante modelar un sistema desde la perspectiva del usuario?
2. ¿Qué problemas puede causar abusar de las relaciones Include y Extend?
3. ¿En qué situaciones resulta útil la Generalización?
4. ¿Por qué una funcionalidad técnica no siempre debe convertirse en un caso de uso?
5. ¿Cómo ayuda WAVE a mejorar la calidad de un diagrama?

---

## Resumen del tema

El diagrama de casos de uso permite representar las funcionalidades de un sistema desde la perspectiva de los usuarios y sistemas externos. Los actores interactúan con los casos de uso para alcanzar objetivos concretos. UML proporciona mecanismos como Include, Extend, Extension Points y Generalización para modelar relaciones entre funcionalidades y actores. El uso adecuado de estas relaciones y la aplicación de buenas prácticas como la comprobación WAVE contribuyen a obtener diagramas más claros, útiles y mantenibles.