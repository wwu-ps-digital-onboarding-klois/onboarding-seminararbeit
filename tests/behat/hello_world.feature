@mod @mod_onboarding
Feature: Display "Hello World" message

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email |
      | godric-gryffindor | Godric | Gryffindor | godric-gryffindor@hogwarts.com |
      | harry-potter | Harry | Potter | harry-potter@hogwarts.com |
    And the following "courses" exist:
      | fullname | shortname | format |
      | History of Magic | HoM1 | topics |
    And the following "course enrolments" exist:
      | user | course | role |
      | godric-gryffindor | HoM1 | editingteacher |
      | harry-potter | HoM1 | student |
    And I log in as "godric-gryffindor"
    And I am on "History of Magic" course homepage with editing mode on
    And I add a "Onboarding" to section "1" and I fill the form with:
      | Name | Meet other wizards! |
      | Description | Here you can meet other wizards and make new friends. |
    And I log out

  Scenario:
    Given I log in as "godric-gryffindor"
    And I am on "History of Magic" course homepage
    And I follow "Meet other wizards!"
    Then I should see "Hello World!"

  Scenario:
    Given I log in as "harry-potter"
    And I am on "History of Magic" course homepage
    And I follow "Meet other wizards!"
    Then I should see "Hello World!"
