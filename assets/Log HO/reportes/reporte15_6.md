# Reporte diario
**Fecha de reporte** 15 de junio de 2020

## Hermandad Oscura

[Este reporte contiene información que describe las acciones realizadas en el servidor con el motivo de llevar un control de las configuraciones y cambios dentro del servidor]
[A continuación se muestra una lista de los terminis que pueden causar confusión, esto con motivo de que el informe sea los mas detallado posible y todos puedan conocer lo sucedido]

### Cambios realizados

[Las configuraciones y modificaciones se expresan con los signos]
[Listado de terminos utilizados dentro del reporte]
            * + (Para la adicion de configuraciones)
            * - (Para la eliminacion de configuraciones)
            * / (Para las modificaciones en los bots (se le agregará un +))
            * {} (Demuestra los cambios internos dentro de una configuracion)
            * // (Muestra un comentario sobre los cambios)
            * [] (Muestra informacion general)
            * " " (Muestra texto añadido (se le agrega un +))
            * $ (Muestra una linea de código)
            * <> (Muestra la linea de codigo modificada o añadida(se le agrega el signo $))
            * # (Muestra un canal de texto (segun configuraciones puede existir [ +# , -# , /#]))
            * ^ (Muestra un canal de voz (segun las configuraciones puede existir [ +^ , -^ , /^]))
            * ◘ (Muestra categoría servidor [Cambios internos])
            * ∟ (Muestra comandos (se le agrega +))

### Listado de cambios 

    [Inicio de cámbios]

        +/ Bot Ticket Tool
            * + Imagen de fondo y logotipo 
            * +#Soporte 
                * + Edición del mensaje e imagenes de la interacción de Ticket Tool
                * + Modificación de permisos
                    * - @Everyone = Permiso de vista de canal = denegado
                    * - @Noobs = Permiso de vista del canal = denegado
                    * + @Noobs = Permiso de vista del canal = Aprobado
                    * + @Noobs = Permiso de escritura en canal = Denegado
            * + Cambio de colores del panel
            * + Muestra de nombre de quien abre el ticket <{user.name.id}>
            * + Cambio de idioma del bot
                * + Idioma establecido = ES
    

        +/ Bot MEE6
            * + Cambio de color del mensaje de nivel utilizando <!rank>
                * + Color añadido [#C1134E]
        
        +#Transcripciones [Canal nuevo]
            * [Muestra los transcripciones de tickets guardadas]
            + @everyone = permiso de lectura = denegado
            + @Noobs = permiso de lectura = denegado
            + @Staff = permiso de lecura = aprobado
            + @Admins = permiso de lecura = aprobado [Por defecto]
            + @Programador = permiso de lectura = aprobado [Por defecto]
            + @Vigilantes del aura = permiso de lecura = aprobado
            + @Soporte = permiso de lecura = aprobado

        +#Reportes [Canal nuevo]
            * [Muestra los informes diarios]
            + @everyone = permiso de lectura = denegado
            + @Noobs = permiso de lectura = denegado
            + @Staff = permiso de lecura = aprobado
            + @Admins = permiso de lecura = aprobado [Por defecto]
            + @Programador = permiso de lectura = aprobado [Por defecto]
            + @Vigilantes del aura = permiso de lecura = aprobado
            + @Soporte = permiso de lecura = aprobado
            <cooldown> = true
            + Descargas = habilitadas

        +◘ Servidor
            * [Cambios en configuración interna del servidor]
            + Se agregó configuracion de canal AFK por defecto
            + Se estableció canal {^ -----A-F-K-----} como canal AFK por defecto
            +^ Permisos de voz {
                + Conectarse = Aprobado
                + Escuchar = Aprobado
                + Hablar = Denegado
                + @everyone = Permisos de voz => Denegados
            }



        +#Comisaría
            + Usuarios nuevos
                + Loco Un Shiny #3625
                    *Razón: Código 2
                - Loco Un Shiny #3625

        +#Podcast
            * Modificaciones
                + Programador usó el comando : Clear y eliminó 726 mensajes


        +/ Bot Dyno
            +commands enabled
                +Comisaría
                    +Se agregaron comandos para comisaría
                        +∟ ?carcel [Envia un mensaje con instrucciones al canal #comisaría]
                        +∟ ?levantar [Elimina los cargos aplicados al acusado]
                        +∟ ?culpable [Ingresa al acusado al archivo de acusados y se deniegan permisos]
                        +∟ ?espera [El caso es puesto en espera]
        
#### Fin de reporte diario del dia 15 de junio de 2020
[ @staff] Cualquier duda contactar con 
        

        ////////////////////////////////////




        