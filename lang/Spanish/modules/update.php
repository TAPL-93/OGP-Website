<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

include('litefm.php');
define('curl_needed', "Esta pagina necesita el modulo Curl de PHP.");
define('no_access', "Necesitas derechos de administrador para entrar en esta pagina.");
define('dwl_update', "Descargando la actualización...");
define('dwl_complete', "Descarga completa");
define('install_update', "Instalando actualización...");
define('update_complete', "<b>Actualización completa.</b>");
define('ignored_files', "%s archivos ignorados.");
define('not_updated_files_blacklisted', "Archivos no actualizados/instalados (en la lista negra): <br>%s");
define('latest_version', "Última versión");
define('panel_version', "Versión del panel");
define('update_now', "Actualizar Ahora");
define('the_panel_is_up_to_date', "El panel está actualizado.");
define('files_overwritten', "%s Archivos sobrescritos.");
define('files_not_overwritten', "%s los archivos NO se sobrescriben debido a la lista negra");
define('can_not_update_non_writable_files', "No se puede actualizar porque los siguientes archivos/carpetas no se pueden sobreescribir");
define('dwl_failed', "El sistema no puede acceder a la url de la descarga: \"%s\".<br>Intentelo de nuevo mas tarde.");
define('temp_folder_not_writable', "La descarga no se puede realizar porque Apache no tiene permiso de escritura en la carpeta temporal del sistema (%s).");
define('base_dir_not_writable', "El Panel no puede ser actualizado, debido a que Apache no tiene permisos de escritura en la carpeta \"%s\".");
define('new_files', "%s archivos nuevos.");
define('updated_files', "Archivos actualizados:<br>%s");
define('select_mirror', "Seleccione un servidor de descarga");
define('view_changes', "Ver cambios");
define('updating_modules', "Actualizando Modulos");
define('updating_finished', "Actualización Completa");
define('updated_module', "Modulo %s actualizado.");
define('blacklist_files', "Lista negra de archivos");
define('blacklist_files_info', "Todos los archivos marcados no serán actualizados.");
define('save_to_blacklist', "Guardar en la lista negra");
define('no_new_updates', "No hay actualizaciones disponibles.");
define('module_file_missing', "directorio falta el archivo module.php.");
define('query_failed', "Error al ejecutar la consulta");
define('query_failed_2', "a la base de datos.");
define('missing_zip_extension', "La extensión php-zip no está cargada. Por favor, habilite el uso del módulo de Actualización.");
?>
