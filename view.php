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
 * This page prints a particular instance of onboarding
 *
 * @package mod_onboarding
 * @copyright  1999 onwards Konstantin Lois  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 **/

require_once('../../config.php');
$cmid = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('onboarding', $cmid, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);

require_login($course, true, $cm);
$PAGE->set_url('/mod/onboarding/view.php', array('id' => $cm->id));
$PAGE->set_title('Onboarding');
$PAGE->set_heading('Onboarding');

echo $OUTPUT->header();
echo $OUTPUT->box("Hello World!");
echo $OUTPUT->footer();
