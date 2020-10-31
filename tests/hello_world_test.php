<?php

class mod_onboarding_hello_world_testcase extends advanced_testcase {

    public function test_hello_world() {
        $helloWorld = "Hello World!";
        $this->assertEquals("Hello World!", $helloWorld);
    }

}
