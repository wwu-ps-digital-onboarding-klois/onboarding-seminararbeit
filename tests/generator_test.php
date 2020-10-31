<?php

class mod_onboarding_generator_testcase extends advanced_testcase {

    public function test_create_instance() {
        global $DB;
        $this->resetAfterTest();
        $this->setAdminUser();

        // generate: new course
        $course = $this->getDataGenerator()->create_course();

        // assert: no onboardings yet
        $this->assertFalse($DB->record_exists('onboarding', array('course' => $course->id)));

        // generate: onboarding
        $glossary = $this->getDataGenerator()->create_module('onboarding', array('course' => $course->id, 'name' => 'Hufflepuff onboarding'));

        // assert: only the onboarding, that was just created
        $records = $DB->get_records('onboarding', array('course' => $course->id), 'id');
        $this->assertCount(1, $records);
        $this->assertTrue(array_key_exists($glossary->id, $records));

        // generate: onboarding
        $glossary = $this->getDataGenerator()->create_module('onboarding', array('course' => $course->id, 'name' => 'Ravenclaw onboarding'));

        // assert: 2 onboardings, the ones that were just created
        $records = $DB->get_records('onboarding', array('course' => $course->id), 'id');
        $this->assertCount(2, $records);
        $this->assertEquals('Ravenclaw onboarding', $records[$glossary->id]->name);
    }

}
