<?php

/** 

 * Configuración básica de WordPress.

 *

 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,

 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,

 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */


// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //

/** El nombre de tu base de datos de WordPress */

define('DB_NAME', 'wordpress');


/** Tu nombre de usuario de MySQL */

define('DB_USER', 'wordpress');


/** Tu contraseña de MySQL */

define('DB_PASSWORD', 'wordpress');


/** Host de MySQL (es muy probable que no necesites cambiarlo) */

define('DB_HOST', 'localhost');


/** Codificación de caracteres para la base de datos. */

define('DB_CHARSET', 'utf8mb4');


/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */

define('DB_COLLATE', '');


/**#@+

 * Claves únicas de autentificación.

 *

 * Define cada clave secreta con una frase aleatoria distinta.

 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}

 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', 'Yl*3.  YHKPq}|+C|PIWvYKw?T%.3%@}+jD#{b~bBPd&FZ4rGd$|Ee+.HHA<~Ty(');

define('SECURE_AUTH_KEY', 'a._pW@QIPk1c/Z|)#5{<:8YaM4#|ici0+!MIF[@f4fdu`QZXOeUvFKek`>t8^z*F');

define('LOGGED_IN_KEY', 'O )bUArbBfCYq,MoNrpl-t:Nty|ak0t6DR{W+O0T-%-+_I&nmq{Vdyqj<&v[= .{');

define('NONCE_KEY', 'zB,/RJ|+i}[DN^qX=gOYl!Jait1d>bJbp<0&,e#x5E-WXWg&g~1J*;8]qC]*tql@');

define('AUTH_SALT', 'E|m:#q_>Qh_tq?r?(uD(-*E8QM}X{NWlW,p<T| hY>QjW#o`AWpN@q|m 7(hp6Gj');

define('SECURE_AUTH_SALT', 'yc=dLi_+!(gPVIP~|^9O&wkxKs1-,Al|:SijtHi]RHxXWNxx%zVjpRz0;bRT;%r}');

define('LOGGED_IN_SALT', 'ny4B=?2SVfQQU{;OQa6$HT`j#J5 /)s=$>lHY|#6#^4:p[wU%Ez^#Sl:JAeb,BSF');

define('NONCE_SALT', 'V$:C@D SOLHPvH1:m$-,LLxW;|;{Ly(),_NHNBc>mY_4:>Hk-V0&J@4HVb2 /_](');


/**#@-*/


/**

 * Prefijo de la base de datos de WordPress.

 *

 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.

 * Emplea solo números, letras y guión bajo.

 */

$table_prefix  = 'wp_';



/**

 * Para desarrolladores: modo debug de WordPress.

 *

 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.

 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG

 * en sus entornos de desarrollo.

 */

define('WP_DEBUG', false);


/* ¡Eso es todo, deja de editar! Feliz blogging */


/** WordPress absolute path to the Wordpress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');


