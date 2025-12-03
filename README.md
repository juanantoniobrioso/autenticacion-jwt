# Creación de un Servicio de Autenticación con ApiRest JWT

En este proyecto se ha hecho un inicio de sesión para llevarte
a una página donde te den la bienvenida con dicho usuario y te
diga la hora que es. Este proyecto ha hecho uso de API REST
para su funcionamiento

## Cómo funciona

En el inicio de sesión, antes de empezar, no pasa nada. Cuando inicias sesión
con un perfil que esté registrado en un array del php, entonces se generará un token
que se validará al entrar a bienvenida. Si no lo hay o es inválido, te envía a error.html
y tendrás que volver a iniciar sesión. Si no, te llevará a bienvenida.

Si entras directamente en bienvenida sin iniciar sesión, como no hay un token registrado, te llevará directo a error.html y tendrás que volver al inicio de sesión.

## Usuarios para iniciar sesión

Usuario: admin
Contraseña: 1234

Usuario: user
Contraseña: abcd