<?php

class ReadPageCest
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
    public function userCanRead(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/login');

        # Assert the existence of certain text on the page
        $I->see('Login');

        # Assert the existence of a certain element on the page
        $I->seeElement('#email');

        # Interact with form elements
        $I->fillField('[name=email]', 'jill@harvard.edu');
        $I->fillField('[name=password]', 'asdfasdf');
        $I->click('[test=login-button]');

        # Assert expected results
        $I->see('Jill Harvard');
        $I->click('[test=mynotes]');

        # Assert the existence of text within a specific element on the page
        $I->seeElement('[test="logout-link"]');

        $I->see('First note by Jill');

        //test hide
        $I->click('[test=detail-link]');

        $I->see('Note Created:');


        

    }
}