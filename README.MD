
End-point 1.
Registro de Usuarios
/blog/register.php
PARAMETROS username,surname,mail,password,role
EJEMPLO {"username":"carlos","surname":"martinez","date":"carlos@mail.com","password":"1234","role":"1"}

End-point 2.
Login de usuarios
/blog/login.php
PARAMETROS username,password
EJEMPLO  {"username":"carlos","password":"1234"}
● Rol básico - permiso de acceso nivel 1
● Rol medio - permiso de acceso y consulta nivel 2
● Rol medio alto - Permiso de de acceso y agregar nivel 3
● Rol alto medio - permiso de acceso, consulta, agregar y actualizar nivel 4 
● Rol alto - Permiso de acceso, consulta, agregar, actualizar y eliminar nivel 5
Devuelve el valor del token de usuario para login con Postman

End-point 3.
Creación de publicación
/blog/postadd.php
PARAMETROS titulo,descripcion
EJEMPLO {"title":"nuevo","description":"hola m"}

End-point 4.
Actualización de publicación
/blog/postupdate.php
PARAMETROS titulo,descripcion,id del post a editar
EJEMPLO {"title":"nuevo","description":"hola mundo","id":1}

End-point 5.
Eliminación de publicación
/blog/postdelete.php
PARAMETROS id del post a eliminar
EJEMPLO {"id":1}

End-point 6.
Consulta de publicaciones
/blog/postread.php
Devuelve el listado de publicaciones actuales