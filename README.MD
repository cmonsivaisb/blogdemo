
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

End-point 3.
Creación de publicación
/blog/postadd.php
PARAMETROS titulo,descripcion,fecha,id del usuario editor
EJEMPLO {"title":"nuevo","description":"hola m","date":"20/08/2022","userId":1}

End-point 4.
Actualización de publicación
/blog/postupdate.php
PARAMETROS titulo,descripcion,fecha,id del usuario editor,id del post a editar
EJEMPLO {"title":"nuevo","description":"hola m","date":"20/08/2022","userId":1,"id":1}

End-point 5.
Eliminación de publicación
/blog/postdelete.php
PARAMETROS id del post a eliminar
EJEMPLO {"id":1}

End-point 6.
Consulta de publicaciones
/blog/postread.php