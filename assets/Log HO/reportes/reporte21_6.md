# Reporte diario
**Fecha de reporte** 21 de junio de 2020

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


            <<<<<<<<<<<<<<<<<<<<<<<< `Chocolat Bot` >>>>>>>>>>>>>>>>>>>>>>>>
            [ `El Bot chocolat` ]
                - [ El bot chocolat sufrió de baja latencia el día de hoy, esto provocóque el bot entrara en estado de mantenimiento preventivo, justificando su caída a nivel global, pedimos disculpas por los inconvenientes causados.]

### Listado de cambios 

    [ `Inicio de cámbios`] {
        +◘ Servidor {
            + Se ha creado la invitación del servidor
            + Se habilitado la entrada 

            
            +@ [Se han realizado modificaciones en roles]
            +@oscuro {
                + [Canal con acceso exclusivo al canal #mipana]
                + Perrmisos de lecuta = Aprobados
                + Permisos de escritura = Aprobados
                + Permisos de gestion de mensajes = Denegados
                + Permisos de invitación = Denegados 
            }

        }

        + # Mipana
            + [Nuevo canal creado]{
                + Permisos de lecura de @everyone = Denegados
                + Permisos de acceso limitado = @oscurillo
            }

        +#^ Nuevo canal de voz {
            +# Voz-mipana {
                + Permisos de lectura = rol => @mipana
                [Canal exclusivo]
                 
            }
        }

        -/ **Bot MEE6** => RUBIER {
            - Bot eliminado
            [Se ha eliminado el bot al llegar a la conclusion de que no aportaba nada al servidor]

        }

        -/ Reaction Roles Bot {
            - Bot eliminado
            [Bot eliminado al llegar a la conclusion de que no aportaba nada al servidor]
        }

        +/ Bot ARCANE {
            + Se ha añadido un bot
            + Permisos de administrador = Aprobados
            + Permisos de gestión de roles = Aprobado
            + Permisos de gestón de canales = Aprobado

            [El bot Arcane o RUBIER 2.0 es el sustituto oficial del Bot MEE6 luego de llegar a la conclusion de que le bot MEE6 no aportaba nada al servidor, el Bot Arcane llega para gestionar roles y niveles.]
        }

        +/ Bot Dyno {
            + Se ha establecido el Respoible Dyno en = true
            + Se han habilitado los comandos = +<> ?Warn {
                Tiempo de cooldown establecido = 0.60s
                Tiempo de mute establecido = 6 horas.
                Tiempo de mute establecido n2 =12 horas.
                Tiempo de mute establecido n3 = 24 horas.
                
                var = n3;
                tiempo de mute = n3 => for reason Responsible Dyno (user) = ?Kick {
                    n3 (user) = false 
                    return = null;
                }else {
                    n3 (user) = true 
                    return (user) = ResponsibleDyno == ? => ban;
                }
            }
        }

        +




    }

