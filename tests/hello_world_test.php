<?php

class mod_onboarding_hello_world_testcase extends advanced_testcase {

    public function test_hello_world() {
        $hello_world = "Hello World!";
        $this->assertEquals("Hello World!", $hello_world);
    }

}
