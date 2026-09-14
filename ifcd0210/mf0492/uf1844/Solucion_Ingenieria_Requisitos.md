# Solucionario - Análisis y Especificación de Requisitos

## Solución Ejercicio 1

### Respuestas

1. Un requisito es una necesidad o condición que debe cumplir un sistema.
2. Porque los requisitos son la base sobre la que se diseña, desarrolla y valida el software.
3. Un requisito funcional describe una funcionalidad; un requisito no funcional describe una característica o restricción del sistema.

### Explicación

Los requisitos funcionales indican lo que hace el sistema, mientras que los no funcionales indican cómo debe comportarse.

---

## Solución Ejercicio 2

| Requisito | Clasificación |
|------------|---------------|
| El usuario podrá reservar habitaciones online. | Funcional |
| El sistema deberá estar disponible el 99,5 % del tiempo. | No funcional |
| Incrementar un 20 % las reservas realizadas por Internet. | De negocio |
| El cliente podrá cancelar una reserva. | Funcional |
| La aplicación deberá responder en menos de 3 segundos. | No funcional |

### Explicación

Los requisitos funcionales describen acciones del sistema; los no funcionales establecen características de calidad; los de negocio expresan objetivos organizativos.

---

## Solución Ejercicio 3

### Diagrama de flujo (representación textual)

Inicio

↓

Introducir número de socio

↓

Verificar número

↓

¿Socio válido?

├── Sí → Permitir préstamo → Fin

└── No → Mostrar error → Fin

### Explicación

El punto clave es identificar la decisión "¿Socio válido?" y representar sus dos posibles caminos.

---

## Solución Ejercicio 4

### Actores

- Estudiante

### Casos de uso

- Consultar catálogo de cursos
- Inscribirse en un curso
- Descargar certificados

### Relaciones

Estudiante → Consultar catálogo

Estudiante → Inscribirse en curso

Estudiante → Descargar certificados

### Explicación

El estudiante interactúa directamente con todas las funcionalidades identificadas.

---

## Solución Ejercicio 5

### Requisitos funcionales

RF-01: El sistema permitirá consultar el historial completo de compras del usuario.

RF-02: El sistema mostrará el detalle de cada compra realizada.

### Requisito no funcional

RNF-01: La consulta del historial deberá completarse en menos de 2 segundos.

### Explicación

Los requisitos funcionales describen acciones. El no funcional establece una característica medible de rendimiento.

---

## Solución Ejercicio 6

### Requisito 1

"El sistema debe ser intuitivo."

Problema:
- Subjetivo.
- No verificable.

Posible mejora:
- El 90 % de los usuarios deberá completar el registro sin ayuda externa.

### Requisito 2

"El usuario podrá consultar sus pedidos."

Problema:
- No presenta problemas significativos.

Clasificación:
- Requisito funcional.

### Requisito 3

"La aplicación deberá ser rápida."

Problema:
- Ambiguo.
- No medible.

Posible mejora:
- El tiempo de respuesta no superará los 2 segundos.

### Explicación

Los requisitos deben ser verificables y medibles para evitar interpretaciones diferentes.

---

## Solución Ejercicio 7

### 1. ¿Por qué debe gestionarse el cambio?

Porque modifica el alcance inicial del proyecto y puede afectar a otros requisitos existentes.

### 2. ¿Qué impacto puede tener?

- Incremento del esfuerzo.
- Retrasos en la planificación.
- Necesidad de nuevas pruebas.
- Cambios en la base de datos.
- Modificaciones en la interfaz.

### 3. ¿Qué artefactos podrían verse afectados?

- Documento de requisitos.
- Casos de uso.
- Diagramas.
- Planificación.
- Casos de prueba.
- Matriz de trazabilidad.

### Explicación

La gestión de requisitos permite evaluar el impacto antes de aceptar e implementar modificaciones.

---

## Posibles respuestas a las preguntas de reflexión

### Pregunta 1

Una mala definición de requisitos puede generar errores de desarrollo, sobrecostes y productos que no satisfagan al cliente.

### Pregunta 2

Porque corregir errores en fases tempranas es mucho más barato que hacerlo cuando el sistema ya está desarrollado.

### Pregunta 3

Porque muestran claramente qué funcionalidades utiliza cada actor.

### Pregunta 4

Porque permite conocer el origen de cada requisito y analizar el impacto de los cambios.

### Pregunta 5

Puede obligar a replantear tareas, plazos, recursos y presupuestos.

---

## Errores habituales del alumnado

1. Confundir requisitos funcionales con no funcionales.
2. Redactar requisitos ambiguos.
3. Olvidar que los requisitos deben ser verificables.
4. Considerar los diagramas de flujo y los casos de uso como equivalentes.
5. No tener en cuenta el impacto de los cambios en los requisitos.
6. Redactar requisitos utilizando términos subjetivos como:
   - Fácil
   - Rápido
   - Intuitivo
   - Adecuado
7. No relacionar los requisitos con los objetivos de negocio.