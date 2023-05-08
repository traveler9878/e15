<?php

class RegisterPageCest
{
    /**
     * Any code you put in this method will be executed before each test
     */
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     *
     */
    public function userCanRegister(AcceptanceTester $I)
    {
        $testName = rand(1,1000);
        $testEmail = $testName.'@test.com';
        # Act

        $I->amOnPage('/login');
        $I->click('[test=register-link]');

        # Assert the existence of certain text on the page
        $I->see('Login here');

        # Assert the existence of a certain element on the page
        $I->seeElement('#email');

        # Interact with form elements
        $I->fillField('[name=email]', $testEmail);
        $I->fillField('[name=password]', 'asdfasdf');
        $I->fillField('[name=password_confirmation]', 'asdfasdf');
        $I->click('[test=register-button]');

        # Assert expected results
        $I->see($testName);

        # Assert the existence of text within a specific element on the page
        $I->seeElement('[test="logout-link"]');


        $I->click('[test="logout-link"]');
    }
}