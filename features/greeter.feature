Feature: Greeter web aplication
  In order to be greeted on a daily basis
  As a forever-alone guy
  I want a polite website that says hello to me everyday


  Scenario: Ask my name and say hello to me
    Given I am on the homepage
    When I fill in "Name" with "Forever Alone"
    And I press "Submit"
    Then I should see "Hello, Forever Alone"