<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Weekly Tip block
 *
 * @package   block_weekly_tip
 * @copyright 2025 Laura Valencia
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_weekly_tip extends block_base {

    // 1 Inicializa el bloque (define su título)
    public function init() {
        // Usa el texto definido en lang/en/block_weekly_tip.php
        $this->title = get_string('pluginname', 'block_weekly_tip');
    }

    // 2 Devuelve el contenido del bloque
    public function get_content() {

        // Si el contenido ya está cargado, lo devuelve
        if ($this->content !== null) {
            return $this->content;
        }

        // Crea un objeto vacío para el contenido
        $this->content = new stdClass();

        // Aquí irá el texto que se muestra en el bloque
        $this->content->text = 'Hello world!';

        // Pie de página (lo dejamos vacío)
        $this->content->footer = '';

        return $this->content;
    }
}




// this block provides a weekly tip to users
function get_weekly_tip() {
    $tips = [
        'Did you know you can customize your dashboard?',
        'Check out the latest updates in the Moodle community.',
        'Remember to back up your courses regularly.',
        'Engage with your peers in the forums for better learning.',
        'Explore new plugins to enhance your Moodle experience.'
    ];
    
    $actual_week = date('W');
    $tip_index = $actual_week % count($tips);
    return $tips[$tip_index];
}