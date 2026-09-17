# UML: Diagrama de Casos de Uso - Soluciones

## Soluciones de los ejercicios

### Ejercicio tipo 1: Comprensión

#### Solución

a) Un actor es una entidad externa que interactúa con el sistema para conseguir un objetivo.

b) Un caso de uso representa una funcionalidad o servicio que ofrece el sistema.

c) El objetivo principal es mostrar qué funcionalidades proporciona el sistema y quién las utiliza.

---

### Ejercicio tipo 2: Identificación o clasificación

#### Solución

| Elemento | Clasificación |
|-----------|---------------|
| Cliente | Actor |
| Realizar pago | Caso de Uso |
| Administrador | Actor |
| Consultar catálogo | Caso de Uso |
| Sistema de facturación | Actor |
| Generar informe | Caso de Uso |

Explicación:

Los actores representan entidades externas al sistema. Los casos de uso representan funcionalidades ofrecidas por el sistema.

---

### Ejercicio tipo 3: Aplicación práctica

#### Solución

Actores:

- Usuario
- Bibliotecario

Casos de uso:

- Buscar libros
- Reservar libro
- Iniciar sesión
- Solicitar préstamo

Posible relación Include:

```text
Reservar libro
    <<include>>
Iniciar sesión