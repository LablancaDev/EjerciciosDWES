<?php
    function accesoUsuario($usuarios, $usuario, $pass){
        $existe = false; 
        foreach($usuarios as $valor){
            if ($valor[3]==$usuario && $valor[4]==$pass){
                $existe=true; 
                break;
        }
    }
    return $existe;
}
    function devuelveId($usuario, $usuarios){
        $id_usu = 0; 
        foreach($usuarios as $valor){
            if ($valor[3]==$usuario){
                $id_usu = $valor[0]; 
                break;
        }
    }
    return $id_usu;
}
    function devuelveRol($id_usu, $usuarios_roles){
        $id_rol = 0; 
        foreach($usuarios_roles as $valor){
            if ($valor[0]==$id_usu){
            $id_rol = $valor[1]; 
            break;
        }      
    }
            return $id_rol;
}
    function devuelvePermisos($id_rol, $roles_permisos){
        $id_permisos = array(); 
        foreach($roles_permisos as $valor){
            if ($valor[0]==$id_rol){array_push($id_permisos, $valor[1]);
            }
        }
            return $id_permisos;
}
    function muestraUsuario($id_usu, $usuarios){
        $nombreCompleto = ""; 
        foreach($usuarios as $valor){
            if ($valor[0]==$id_usu){
            $nombreCompleto=$valor[1]." ".$valor[2]; 
             break;
        }
    }
            return $nombreCompleto;
}
    function muestraRol($id_rol, $roles){
        $rol = "";
        foreach($roles as $valor){
            if ($valor[0]==$id_rol){
            $rol=$valor[1]; 
            break;
        }
    }
        return $rol;
}
    function muestraPermisos($listaPermisos, $permisos){
        $nombrePermisos = "";
        foreach ($listaPermisos as $valor){
            foreach($permisos as $dato){
            if ($dato[0]==$valor){
            $nombrePermisos.=$dato[1]." ";
}
        }
    }
    return $nombrePermisos;
}
    ?>
    <!-- este bloque de código PHP contiene una serie de funciones que están destinadas a realizar diferentes tareas en un sistema de control de acceso basado 
    en usuarios, roles y permisos. Aquí está la explicación de cada función:

accesoUsuario($usuarios, $usuario, $pass): Esta función verifica si existe un usuario con un nombre de usuario y contraseña específicos dentro del array $usuarios.
Recorre cada usuario y compara el nombre de usuario ($valor[3]) y la contraseña ($valor[4]) con los valores recibidos como parámetros ($usuario y $pass, respectivamente).

devuelveId($usuario, $usuarios): Esta función busca y devuelve el ID de un usuario específico en el array $usuarios basándose en el nombre de usuario proporcionado.

devuelveRol($id_usu, $usuarios_roles): Busca y devuelve el ID de rol asociado a un usuario en el array $usuarios_roles a través del ID de usuario proporcionado.

devuelvePermisos($id_rol, $roles_permisos): Retorna un array que contiene los IDs de permisos asociados a un rol específico en el array $roles_permisos basado en el ID de rol proporcionado.

muestraUsuario($id_usu, $usuarios): Esta función devuelve el nombre completo de un usuario (nombre y apellido) buscando en el array $usuarios mediante el ID de usuario proporcionado.

muestraRol($id_rol, $roles): Busca y devuelve el nombre del rol correspondiente al ID de rol proporcionado en el array $roles.

muestraPermisos($listaPermisos, $permisos): Construye una cadena de texto que contiene la descripción de los permisos asociados a un rol, buscando en el array $permisos 
basándose en los IDs de permisos presentes en $listaPermisos.

En resumen, estas funciones realizan diversas tareas relacionadas con la gestión de usuarios, roles y permisos dentro de un sistema de control de acceso.





 -->