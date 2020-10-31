<?php

defined('MOODLE_INTERNAL') || die();

class mod_onboarding_generator extends testing_module_generator {

  public function create_instance($record = null, array $options = null) {
      $record = (array)$record;
      return parent::create_instance($record, $options);
  }
}
