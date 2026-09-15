# Modelado del Software

## Objetivos de aprendizaje

Al finalizar este tema, el estudiante será capaz de:

1. Comprender qué es el modelado del software y su importancia en el desarrollo de sistemas.
2. Identificar los principales modelos de arquitectura de software.
3. Diferenciar los modelos de componentes y de interfaz.
4. Interpretar las distintas vistas utilizadas en el modelado del software.
5. Aplicar conceptos básicos de modelado a casos prácticos sencillos.

---

## Introducción teórica

El desarrollo de software requiere planificar y comprender un sistema antes de construirlo. Para ello se utiliza el **modelado del software**, una actividad que permite representar de forma simplificada un sistema mediante diagramas, modelos y vistas.

### ¿Qué es un sistema software?

Un sistema software es un conjunto de programas, datos y componentes que colaboran para satisfacer una necesidad concreta de usuarios u organizaciones.

Ejemplo:

Un sistema de gestión de biblioteca permite registrar libros, gestionar préstamos y consultar información de los usuarios.

### ¿Qué es un modelo?

Un modelo es una representación simplificada de la realidad que ayuda a comprender, analizar y diseñar un sistema antes de implementarlo.

### ¿Qué es un diagrama?

Un diagrama es una representación gráfica de un modelo. Facilita la comunicación entre analistas, diseñadores y desarrolladores.

### ¿Qué es una vista?

Una vista muestra una perspectiva específica del sistema para centrarse en determinados aspectos.

| Vista | Propósito |
|---------|---------|
| Diseño | Describe la estructura lógica del sistema |
| Interacción | Muestra cómo colaboran usuarios y componentes |
| Implementación | Representa módulos, paquetes y código |
| Despliegue | Describe la distribución física del sistema |
| Casos de uso | Muestra funcionalidades y actores |

### Modelos de arquitectura

La arquitectura define la organización general del sistema.

#### Arquitectura centrada en datos

Los datos se sitúan en el centro del sistema y los componentes acceden a ellos.

Ejemplo: Sistema bancario basado en una base de datos central.

#### Arquitectura de flujo de datos

La información circula por distintas etapas de procesamiento.

Ejemplo: Procesamiento de imágenes o vídeo.

#### Arquitectura programa principal/subprograma

Un programa principal coordina subprogramas o funciones.

Ejemplo: Aplicaciones tradicionales desarrolladas mediante funciones.

#### Arquitectura orientada a objetos

El sistema se organiza mediante objetos que contienen datos y comportamiento.

Ejemplo: Aplicaciones desarrolladas en Java, C# o Python orientado a objetos.

### Modelos de componentes

Los componentes son elementos funcionales del sistema.

#### Modelo de componentes tradicional

Se basa en módulos y funciones independientes.

#### Modelo de componentes orientado a objetos

Se basa en clases y objetos que colaboran entre sí.

### Modelo de interfaz

Describe cómo interactúan los usuarios o sistemas externos con la aplicación.

Ejemplos:

- Formularios web.
- Menús de aplicaciones.
- Pantallas de una aplicación móvil.
- APIs para comunicación entre sistemas.

El modelado permite comprender mejor los requisitos, reducir errores de diseño y facilitar el mantenimiento futuro del software.

---

## Conceptos clave

- Sistema software.
- Modelo.
- Diagrama.
- Vista.
- Vista de diseño.
- Vista de interacción.
- Vista de implementación.
- Vista de despliegue.
- Vista de casos de uso.
- Arquitectura centrada en datos.
- Arquitectura de flujo de datos.
- Arquitectura principal/subprograma.
- Arquitectura orientada a objetos.
- Modelo de componentes tradicional.
- Modelo de componentes orientado a objetos.
- Modelo de interfaz.

---

## Ejercicios

### Ejercicio tipo 1: Comprensión

#### Enunciado

Explica con tus propias palabras:

a) Qué es un modelo de software.

b) Qué es un diagrama.

c) Por qué son importantes durante el desarrollo de software.

---

### Ejercicio tipo 2: Identificación o clasificación

#### Enunciado

Indica a qué modelo de arquitectura corresponde cada situación:

1. Una aplicación que procesa una imagen pasando por varias fases.
2. Un sistema basado en una base de datos central que utilizan múltiples aplicaciones.
3. Una aplicación compuesta por clases que colaboran entre sí.
4. Un programa que ejecuta varias funciones desde una función principal.

---

### Ejercicio tipo 3: Aplicación práctica

#### Enunciado

Una pequeña clínica quiere desarrollar un sistema para:

- Gestionar pacientes.
- Gestionar citas.
- Consultar historiales médicos.

Indica:

a) Qué tipo de arquitectura podría utilizarse.

b) Qué componentes principales tendría el sistema.

c) Qué tipo de interfaz tendría el usuario.

---

### Ejercicio tipo 4: Análisis

#### Enunciado

Una empresa desea desarrollar una tienda online.

Analiza qué vistas serían necesarias para documentar correctamente el sistema y explica brevemente la utilidad de cada una.

---

### Ejercicio adicional 1

#### Enunciado

Relaciona cada elemento con su definición:

- Sistema software
- Modelo
- Diagrama
- Vista

Definiciones:

a) Representación gráfica de información.

b) Perspectiva particular del sistema.

c) Conjunto de programas y datos.

d) Representación simplificada de la realidad.

---

### Ejercicio adicional 2

#### Enunciado

Identifica tres componentes que podrían existir en una aplicación de reservas de hotel e indica cuál sería la responsabilidad principal de cada uno.

---

### Ejercicio adicional 3

#### Enunciado

Una universidad dispone de una aplicación web para gestionar matrículas.

Indica qué información mostraría:

- La vista de casos de uso.
- La vista de diseño.
- La vista de despliegue.

---

## Preguntas de reflexión

1. ¿Por qué resulta más económico detectar errores durante el modelado que durante la programación?
2. ¿Puede un mismo sistema representarse mediante varias vistas? Justifica tu respuesta.
3. ¿Qué ventajas aporta una arquitectura orientada a objetos frente a una arquitectura tradicional?
4. ¿Qué problemas surgirían si un proyecto se desarrollara sin utilizar modelos ni diagramas?
5. ¿Qué vista considerarías más útil para un desarrollador? Explica tu razonamiento.

---

## Resumen del tema

El modelado del software permite representar un sistema antes de construirlo. Para ello se utilizan modelos, diagramas y distintas vistas que muestran aspectos concretos del sistema. La arquitectura define la estructura general del software y puede organizarse de diferentes formas, como centrada en datos, flujo de datos, principal/subprograma u orientada a objetos. Además, los sistemas están compuestos por componentes e interfaces que permiten implementar funcionalidades e interactuar con usuarios o sistemas externos. Un buen modelado facilita la comprensión, el diseño y el mantenimiento del software.