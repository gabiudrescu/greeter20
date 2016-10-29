Feature: Greeter web aplication
  In order to be greeted on a daily basis
  As a forever-alone guy
  I want a polite website that says hello to me everyday


  Scenario: Ask my name and say hello to me
    Given I am on the homepage
    When I fill in "Name" with "Forever Alone"
    And I press "Submit"
    Then I should have "200" HTTP Response
    And I should see "Hello, Forever Alone"

  Scenario: Allow people with common names to select their name from a list
    Given I am on the homepage
    When I select "John" from "Common names"
    And I press "Submit"
    Then I should have "200" HTTP Response
    And I should see "Hello, John"

  Scenario: Add my name to the common name list after my first greet
    Given I am on the homepage
    When I fill in "Name" with "Forever Alone"
    And I press "Submit"
    Then I should see "Forever Alone" in the "#greeter select" element
