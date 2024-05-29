<?php
$usuarios = array(array(1, "Luis", "Sancho Blas", "lsancho", "pass1"), 
    array(2, "Sara", "Solis Romero", "ssolis","pass2"),
    array(3, "Ana", "Mas Medina", "amas", "pass3"),
    array(4, "Pedro", "Ros Sendra", "pros", "pass4"));
$roles = array (array(1, "Administrador"), 
    array(2, "Profesor"),
    array(3, "Alumno"));
$permisos = array (array(1, "Insertar"),
    array(2, "Borrar"), 
    array(3, "Modificar"), 
    array(4, "Consultar"), 
    array(5, "Listar"));
$roles_permisos = array( array (1, 1),
    array (1, 2),
    array (1, 3),
    array (1, 4),       
    array (1, 5),
    array (2, 1),
    array (2, 4),
    array (2, 5),
    array (3, 4));
$usuarios_roles = array (array (1, 1),
    array (2,3),
    array (3,2),
    array (4, 2));
    ?>
    <!-- Este bloque de código PHP contiene la definición de varios arrays que representan información relacionada con usuarios, roles y permisos en un sistema. 
    Aquí está la explicación de cada uno:

$usuarios: Es un array multidimensional que almacena información sobre los usuarios. Cada sub-array representa un usuario y contiene los siguientes datos:

Índice 0: ID del usuario.
Índice 1: Nombre del usuario.
Índice 2: Apellido del usuario.
Índice 3: Nombre de usuario (username).
Índice 4: Contraseña del usuario.
$roles: Es un array multidimensional que almacena información sobre los roles disponibles en el sistema. Cada sub-array contiene:

Índice 0: ID del rol.
Índice 1: Nombre del rol.
$permisos: Es un array que almacena información sobre los diferentes tipos de permisos en el sistema. Cada sub-array contiene:

Índice 0: ID del permiso.
Índice 1: Descripción del permiso.
$roles_permisos: Es un array que relaciona los roles con los permisos que tienen asignados. Cada sub-array indica la relación entre un rol y un permiso mediante:

Índice 0: ID del rol.
Índice 1: ID del permiso.
$usuarios_roles: Es un array que relaciona los usuarios con los roles que tienen asignados. Cada sub-array indica la relación entre un usuario y un rol mediante:

Índice 0: ID del usuario.
Índice 1: ID del rol.
En resumen, estos arrays representan la información básica sobre usuarios, roles y permisos en un sistema, y las relaciones entre ellos para establecer qué roles 
tienen qué permisos y qué usuarios tienen qué roles asignados. -->