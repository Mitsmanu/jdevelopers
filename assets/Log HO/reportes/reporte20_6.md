# Reporte diario
**Fecha de reporte** 20 de junio de 2020

## Hermandad Oscura

[Este reporte contiene información que describe las acciones realizadas en el servidor con el motivo de llevar un control de las configuraciones y cambios dentro del servidor]
[A continuación se muestra una lista de los terminis que pueden causar confusión, esto con motivo de que el informe sea los mas detallado posible y todos puedan conocer lo sucedido]

### Cambios realizados

[Las configuraciones y modificaciones se expresan con los signos]
[Listado de terminos utilizados dentro del reporte]
            * `+` (Para la adicion de configuraciones)
            * `-` (Para la eliminacion de configuraciones)
            * `/` (Para las modificaciones en los bots (se le agregará un +))
            * `{}` (Demuestra los cambios internos dentro de una configuracion)
            * `//` (Muestra un comentario sobre los cambios)
            * `[]` (Muestra informacion general)
            * `" "` (Muestra texto añadido (se le agrega un +))
            * `$` (Muestra una linea de código)
            * `<>` (Muestra la linea de codigo modificada o añadida(se le agrega el signo $))
            * `#` (Muestra un canal de texto (segun configuraciones puede existir [ +# , -# , /#]))
            * `^` (Muestra un canal de voz (segun las configuraciones puede existir [ +^ , -^ , /^]))
            * `◘` (Muestra categoría servidor [Cambios internos])
            * `∟` (Muestra comandos (se le agrega +))
            * `=>` (Concatenación de configuraciones)
            * `@` (Cambios en roles)

            <<<<<<<<<<<<<<<<<<<<<<<<Informe de problemas>>>>>>>>>>>>>>>>>>>>>>>>
            [Bot MEE6 inestable]
                - El bot **MEE6** mantiene una latencia irregular, esto debido al cámbio de Hosting previamente notificado, esta es una falla temporal del sisstema, pronto estará estable.

        


### Listado de cambios 

    [ `Inicio de cámbios`]

        +◘ => `+#` {
            Se creó el canal #El pana
            [Se establecieron nuevas configuraciones]  
                -@ everyone {
                    -Permisos de lectura = Denegados
                    -Permisos de escritura = Denegados
                }  
                +@oscuro {
                    +Permisos de escritura = Aprobados
                    +Permisos de lectura = Aprobados
                    +Permisos de lectura de historial = Aprobados
                    +Permisos de conexión = Aprobados
                }
                +@staff {
                    Permisos administrativos = [Por defecto] => Aprobados
                }

                +@oscuro {
                    +Permisos de lectura = Aprobados
                    +Permisos de escritura = Aprobados
                    +Premisos de conexión = Aprobados
                }

                //El rol @oscuro tiene exclusividad al uso del canal #


            
                }
            
        +◘ => @ {
            [Se creó un nuevo rol] 
            +@oscuro
            [Permisos del rol] {
                +Permisos establecidos {
                    -Permisos de administración = `Denegados`
                    +Permisos de lectura de mensajes = `Aprobado`
                    +Permisos de escritura de mensajes = `Aprobado`
                    -Permisos de gestión de mensajes = `Denegado`
                    -Permisos de gestion de WebHooks = `Denegado`
                    -Permisos de reacciones = `Denegados`
                    -Permisos de invitación = `Denegados`
                    -Permisos de prioridad de palabra = `Denegados`
                    -Permisos de gestión de canal = `Denegados`
                    -Permisos de mencionar `everyone` & `here` = `Denegado`
                    -Permisos de gesitionar roles = `Denegado`
                    -Permisos de expulsar miembros = `Denegado`
                    -Permisos de silenciar miembros = `Denegado`
                    -Permisos para banear miembros = `Denegado`
                    -Permisos para gestionar apodos = `Denegado`
                    -Permisos para mover miembros = `Denegado`
                    -Permisos de vista de auditoría = `Denegado`
                    -Permisos para gestionar emojis = `Denegado`
                    -Permisos de enviar mensajes de voz a texto = `Denegado`
                    -Permiso para ensordecer miembros = `Denegado`
                    -Permiso para mover a usuarios = `Denegado`
                    -Permiso de uso de actividad de voz = `Denegado`


                    +# => # [Canal exclusivo del rol]
                }

            }
        };

#### Fin de reporte diario del dia 20 de junio de 2020
[ @staff] `Cualquier duda contactar con`

