<?php

/**
 * Add onboarding instance.
 *
 * @param stdClass $data
 * @param stdClass $mform
 * @return int new onboarding instance id
 */
function onboarding_add_instance($mystream, $mform) {
    global $DB;

    $mystream->timemodified = time();

    $mystream->id = $DB->insert_record('onboarding', $mystream);
    $newrecord = $DB->get_record('onboarding', ['id' => $mystream->id]);

    return $mystream->id;
}

/**
 * Update onboarding instance.
 *
 * @param stdClass $data
 * @param stdClass $mform
 * @return bool true
 */
function onboarding_update_instance($data, $mform) {
    global $DB;

    $data->timemodified = time();
    $data->id = $data->instance;
    if (!isset($data->customtitles)) {
        $data->customtitles = 0;
    }

    $DB->update_record('onboarding', $data);

    return true;
}

/**
 * Delete onboarding instance by activity id
 *
 * @param int $id
 * @return bool success
 */
function onboarding_delete_instance($id) {
    global $DB;

    if (!$onboarding = $DB->get_record('onboarding', array('id' => $id))) {
        return false;
    }

    $cm = get_coursemodule_from_instance('onboarding', $id);
    \core_completion\api::update_completion_date_event($cm->id, 'onboarding', $id, null);

    $DB->delete_records('onboarding', array('id' => $onboarding->id));

    return true;
}
