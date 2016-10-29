<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Webmozart\Assert\Assert;
use \Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * @Then I should have :code HTTP Response
     */
    public function iShouldHaveHttpResponse($code)
    {
        $responseCode = $this->getSession()->getStatusCode();

        Assert::eq($code, $responseCode, sprintf(
            'This %s code is not the same as this %s responsecode',
            $code,
            $responseCode
        ));
    }
}
