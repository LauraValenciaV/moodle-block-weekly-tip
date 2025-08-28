<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle es software libre: puede redistribuirlo y/o modificarlo
// bajo los términos de la Licencia Pública General GNU publicada
// por la Free Software Foundation, ya sea la versión 3 de la Licencia
// o (a su elección) cualquier versión posterior.
//
// Moodle se distribuye con la esperanza de que sea útil,
// pero SIN NINGUNA GARANTÍA; incluso sin la garantía implícita de
// COMERCIABILIDAD o IDONEIDAD PARA UN PROPÓSITO PARTICULAR.
// Vea la Licencia Pública General GNU para más detalles.
//
// Debería haber recibido una copia de la Licencia Pública General GNU
// junto con Moodle. Si no, consulte <http://www.gnu.org/licenses/>.

/**
 * Cadenas de idioma para el componente 'block_weekly_tip', idioma 'es'
 *
 * @package   block_weekly_tip
 * @copyright 2025 Laura Valencia
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 o posterior
 */

// Nombre del plugin (se muestra en la lista de bloques).
$string['pluginname'] = 'Consejo semanal';

// Capacidades (permisos para añadir el bloque).
$string['weekly_tip:addinstance'] = 'Añadir un nuevo bloque de Consejo semanal';
$string['weekly_tip:myaddinstance'] = 'Añadir un nuevo bloque de Consejo semanal a la página personal';

// Ajustes del bloque: etiqueta de texto personalizada para el formulario de configuración.
$string['tiptext'] = 'Texto personalizado de consejo';

// Consejos por defecto que se muestran en el bloque (pueden rotar o mostrarse aleatoriamente).
$string['tip1'] = '¿Sabías que puedes personalizar tu tablero (Dashboard)?';
$string['tip2'] = 'Revisa las últimas actualizaciones en la comunidad de Moodle.';
$string['tip3'] = 'Recuerda hacer copias de seguridad de tus cursos regularmente.';
$string['tip4'] = 'Participa en los foros para mejorar tu aprendizaje.';
$string['tip5'] = 'Explora nuevos plugins para mejorar tu experiencia en Moodle.';

// Cadenas de ajustes de administrador.
$string['globaltips'] = 'Consejos globales (uno por línea)';
$string['globaltips_desc'] = 'Estos consejos se mostrarán en todo el sitio. Introduce un consejo por línea. El bloque mostrará un consejo por semana, rotando en orden.';

// Consejos locales (para profesores cuando editan el bloque en un curso).
$string['localtips'] = 'Consejos locales (uno por línea)';
$string['localtips_desc'] = 'Estos consejos solo aplican a este curso. Introduce un consejo por línea. El bloque mostrará un consejo por semana, rotando en orden.';

// Capacidad: permiso para gestionar consejos locales en el bloque.
$string['weekly_tip:managelocaltips'] = 'Gestionar consejos locales para el bloque Consejo semanal';

// Mensaje mostrado cuando el usuario no tiene permiso para editar consejos locales.
$string['nopermission'] = 'No tienes permiso para editar consejos locales en este bloque.';

// Mensaje mostrado cuando no hay consejos disponibles (ni locales, ni globales, ni por defecto).
$string['notipsavailable'] = 'No hay consejos disponibles';