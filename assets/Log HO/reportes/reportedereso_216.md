# Reporte de resolución #1 
## Reporte generado a fecha 21 de junio de 2020
### Razón de generación: Resolución de problemas de anulaciones e información de las mismas

#### Este reporte contiene cambios e información detallada sobre los cambios realizados cuya información interna debe ser revisada y restablecida (Importante).


##### Información {
    * Anulaciones {
        [ Las anulaciones son permisos denegados o concedidos a un rol específico, estas anulaciones van ligadas a la jerarquía de roles establecida previamente en el servidor, las anulaciones como lo dice su nombre, sirven para anular permisos ya previamente establecidos en los roles de gestión de auditoría del sistema, esto, con el fin de controlar el acceso a cada canal y negar los permisos en caso de sea necesario un cierre de canal o una anlacion automatizada de permisos por roles pre-definidos.]

    }
    * Jerarquía de roles {
        [La configuración de poder descendente establecida en las configuraciones de gestión de roles en el servidor son el orden de poder y permisos controlados del sistema, cada rol [A exepción de roles administrativos] es controlado por el rol que esté sobre el, colocándolo graficamente sería así:
        
        Rol 1 ---->Permisos de escritura en canal general = Aprobados
        Rol 2 ----> Permisos de escritura en canal general = Denegados

        Interfaz de usuario = [Escribe un mensaje]

        Actualmente la persona con el rol 1 anula las restricciones establecidas por el rol dos, pero, si cambiamos el orden o modificamos un rol que este superior al rol 1 sería asi:

        Rol 2 ----> Permisos de escritura en canal general = Denegados
        Rol 1 ----> Permisos de escritura en canal general = **Aprobados**

        Interfaz de usuario nueva = [No tienes los permisos necesarios para escribir en este canal] [Canal de solo lectura]
        

        Como puedes ver, el usuario ya no puede escribir en el canal general, esto debido a una mala configuracion de anulaciones en roles superiores.
        ]
    }

    * Anulaciones de canal{
        [Las anulaciones en canal estan ligadas a la jerarquía de roles, sin embargo este tipo deconfiguraciones en cada canal son mayores a la de los roles establecidos en el servidor, estas configuraciones puede enular **TODOS** los permisos ya previamente establecidos en gestión de roles, esto quiere decir que si configuras un rol para que ese rol pueda colocar reacciones en un canal y luego le niegas o le dejas en neutral el permisos en ese canal, aún teniendo el permisos general otorgado en roles de servidor, este no podrá añadir reacciones, y así pasa con todos los roles y permisos de canales, claro, a exepción de los roles administrativos, cuyos permisos por defecto son aprobados para todo el servidor]
    }

    
}

##### Cambios internos restablecidos {
    
    **Dyno ha cargado una copia de seguridad con la razón: Responsilble Dyno**

    - Se ha esteblecido en neutral el permisos de escritura del rol Booster Oscuro
    - Se ha establecido en neutral
    - Se ha restablecido el rol programador en Charla general = Razón => Permisos duplicados
    + Se ha esteblecido el permiso de lecura del rol noob en canal habla y canta de = Denegado / neutral =>Aprobado
    - Se ha denegado el acceso a WebHooks

}

La información de los cambios realizados se verá reflejada en el informe diario del día de hoy.


###### Fin de informe de incidencias y resoluciones

Informe generado a las 10:12 del día 21 de junio de 2020
