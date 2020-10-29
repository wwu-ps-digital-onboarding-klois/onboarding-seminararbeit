<?php

function onboarding_add_instance($mystream, $mform) {
    global $DB;

    $mystream->timemodified = time();
    $mystream->intro = '<p>Inserted text</p>';

    print_object($mystream);
    $mystream->id = $DB->insert_record('onboarding', $mystream);
    $newrecord = $DB->get_record('onboarding', ['id' => $mystream->id]);
    //print_object($mystream);

    return $mystream->id;
}
