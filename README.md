# PHP_CRUD

Proyecto sobre creación y modificación de usuarios.

Para poder ingresar al sistema, hace falta estar registrado.

Una vez dentro se podra modificar todos los usuarios existentes o crear nuevos.

Esta hecho sobre PHP, HTML, CSS y MySQL. Sin frameworks.

Me sirvió mucho para aprender php.

Este proyecto lo hice localmente corriendo en XAMPP con MySQL.

# Para poder correr este proyecto (EN LINUX), es necesario 

## Tener instalado
1. XAMPP.
2. Editor de texto (vscode, atom, sublime text).


## Seguir estos pasos
1. Descargarse o clonar el repositorio.
2. Guardarlo en la carpeta *htdocs*.
![image](https://user-images.githubusercontent.com/31457066/111873266-41e70880-896e-11eb-984a-5748b5a8916f.png)
3. Prender XAMPP.
![image](https://user-images.githubusercontent.com/31457066/111873242-2aa81b00-896e-11eb-8da9-ade8061b3cd8.png)
4. Ir a localhost/phpmyadmin y crear una nueva base de datos llamada *php_crud*.
![image](https://user-images.githubusercontent.com/31457066/111873308-72c73d80-896e-11eb-83d5-35f97e3d3412.png)
5. Crear la tabla *usuario* con los campos: *id*, *email* y *password*.
![image](https://user-images.githubusercontent.com/31457066/111873323-82df1d00-896e-11eb-9430-ea27a3e29d49.png)
![image](https://user-images.githubusercontent.com/31457066/111873331-8bcfee80-896e-11eb-91f5-1a07117b388c.png)
6. Una vez hecho esto ya se podra acceder a localhost/PHP_CRUD-main.
![image](https://user-images.githubusercontent.com/31457066/111873349-adc97100-896e-11eb-873d-fa36807dd060.png)
7. Deberá ir a *Registrarse* para poder crear un usuario y acceder al sistema.
![image](https://user-images.githubusercontent.com/31457066/111873436-0a2c9080-896f-11eb-86ce-02679570b83e.png)
8. Al hacer click en *Registrarme*, se creará un usuario nuevo en la base de datos, y a su vez accederá al sistema y se mostrarán los usuarios que existen en la base de datos.
![image](https://user-images.githubusercontent.com/31457066/111873492-4102a680-896f-11eb-9314-cae2d20f447c.png)


## Listo! Ahora ya se podrá
1. Crear mas usuarios
2. Editar usuarios
3. Borrar usuarios
4. Cerrar sesión
5. Loguear sesión
