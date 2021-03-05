<?php

/**
 * 
 * @package reviews
 * 
*/

// Evitar borrados accidentales del plugin

if(!defined('WP_UNINSTALL_PLUGIN')) { // Evitar que alguien ejecute el script tecleando su url en el campo direccion del navegador
    die('HEY, WHAT ARE YOU DOING HERE MORON ?');
}

// Eliminar todo rastro de la informacion que ha generado el plugin en nuestra BBDD

