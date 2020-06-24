# Reporte diario
**Fecha de reporte** 22 de junio de 2020

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

### Listado de cambios 

    [ `Inicio de cámbios`] {
        +`◘` [Servidor] {
            - Restablecimiento de canal #comandos
        }

        +#comandos {
            // Canal en mantenimiento preventivo {
                     [Esto significa que el canal está siendo monitoreado para establecer los comandos de *Leveling* del Bot Arcane]{
                         [El mantenimiento preventivo no requiere de un cierre de canal por parte de Dyno]

                         **Finalización programada para dentro de:** *2 dias 14 horas*
                }
            }
        }

        +/ Bot Arcane {
            + Se estableció la experiencia obtenida en 0.38% en canales permitidos 
            + Cambios en canaless permitidos {
                - Permisos de #comandos para experiencia = Denegados [ Hasta finalización de mantenimiento preventivo del canal]
            }
        }
    }

#### Fin de reporte diario del dia 15 de junio de 2020
[ @staff] `Cualquier duda contactar con`