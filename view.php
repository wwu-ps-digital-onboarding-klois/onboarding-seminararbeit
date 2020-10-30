<?php
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
