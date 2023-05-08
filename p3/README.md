
# Project 2
+ By: David Curtis
+ Production URL: <http://e15p2.davidcurtis.me>

## Outside resources

--------------------------------------------------------------------------------------------------------root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance LoginPageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
LoginPageCest: User can log in
Signature: LoginPageCest:userCanLogIn
Test: tests/acceptance/LoginPageCest.php:userCanLogIn
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I see element "[test="logout-link"]"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 1.93 seconds, Memory: 18.66 MB

OK (1 test, 4 assertions)
root@hes:/var/www/e15/p3/tests/codeception# 

root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance CreatePageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
CreatePageCest: User can create
Signature: CreatePageCest:userCanCreate
Test: tests/acceptance/CreatePageCest.php:userCanCreate
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I see element "[test="logout-link"]"
 I fill field "[name=summary]","find_summary"
 I fill field "[name=hashtags]","find_hashtags"
 I fill field "[name=detail]","find_detail"
 I click "[test=create-button]"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 2.1 seconds, Memory: 18.66 MB

OK (1 test, 4 assertions)
root@hes:/var/www/e15/p3/tests/codeception# 


Time: 1.87 seconds, Memory: 18.66 MB

OK (1 test, 4 assertions)
root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance ListPageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
ListPageCest: User can list
Signature: ListPageCest:userCanList
Test: tests/acceptance/ListPageCest.php:userCanList
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I click "[test=mynotes]"
 I see element "[test="logout-link"]"
 I see "First note by Jill"
 I click "[test=logout-link]"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 2.57 seconds, Memory: 18.66 MB

OK (1 test, 5 assertions)

root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance HideNoteCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
HideNoteCest: User can hide
Signature: HideNoteCest:userCanHide
Test: tests/acceptance/HideNoteCest.php:userCanHide
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I click "[test=mynotes]"
 I see element "[test="logout-link"]"
 I see "First note by Jill"
 I click "[test=hide-link]"
 I don't see "First note by Jill"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 1.3 seconds, Memory: 18.66 MB

OK (1 test, 6 assertions)
root@hes:/var/www/e15/p3/tests/codeception# 


Time: 1.51 seconds, Memory: 18.66 MB

OK (1 test, 6 assertions)
root@hes:/var/www/e15/p3/tests/codeception# 


root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance DeletePageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
DeletePageCest: User can delete
Signature: DeletePageCest:userCanDelete
Test: tests/acceptance/DeletePageCest.php:userCanDelete
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I click "[test=mynotes]"
 I see element "[test="logout-link"]"
 I see "First note by Jill"
 I click "[test=delete-link]"
 I click "[test=delete-submit]"
 I don't see "First note by Jill"
 I see "hide"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 3.25 seconds, Memory: 18.66 MB

OK (1 test, 7 assertions)
root@hes:/var/www/e15/p3/tests/codeception# 
root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance ReadPageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
ReadPageCest: User can read
Signature: ReadPageCest:userCanRead
Test: tests/acceptance/ReadPageCest.php:userCanRead
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "#email"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "[test=login-button]"
 I see "Jill Harvard"
 I click "[test=mynotes]"
 I see element "[test="logout-link"]"
 I see "First note by Jill"
 I click "[test=detail-link]"
 I see "Note Created:"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------


Time: 1.1 seconds, Memory: 18.66 MB

OK (1 test, 6 assertions)
root@hes:/var/www/e15/p3/tests/codeception# codecept run acceptance RegisterPageCest --steps
Codeception PHP Testing Framework v4.2.2 https://helpukrainewin.org
Powered by PHPUnit 8.5.28 #StandWithUkraine

Acceptance Tests (1) -------------------------------------------------------------------------------------------------------------
RegisterPageCest: User can register
Signature: RegisterPageCest:userCanRegister
Test: tests/acceptance/RegisterPageCest.php:userCanRegister
Scenario --
 I am on page "/login"
 I click "[test=register-link]"
 I see "Login here"
 I see element "#email"
 I fill field "[name=email]","760@test.com"
 I fill field "[name=password]","asdfasdf"
 I fill field "[name=password_confirmation]","asdfasdf"
 I click "[test=register-button]"
 I see 760
 FAIL 

----------------------------------------------------------------------------------------------------------------------------------


Time: 1.35 seconds, Memory: 18.66 MB

There was 1 failure:

---------
1) RegisterPageCest: User can register
 Test  tests/acceptance/RegisterPageCest.php:userCanRegister
 Step  See 760
 Fail  Failed asserting that  on page /register
-->  My Daily Notes body { width: 35em; margin: 0 auto; font-family: Tahoma, Verdana, Arial, sans-serif; } .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 
[Content too long to display. See complete response in '/var/www/e15/p3/tests/codeception/tests/_output/' directory]
--> contains "760".

Scenario Steps:

 9. $I->see(760) at tests/acceptance/RegisterPageCest.php:37
 8. $I->click("[test=register-button]") at tests/acceptance/RegisterPageCest.php:34
 7. $I->fillField("[name=password_confirmation]","asdfasdf") at tests/acceptance/RegisterPageCest.php:33
 6. $I->fillField("[name=password]","asdfasdf") at tests/acceptance/RegisterPageCest.php:32
 5. $I->fillField("[name=email]","760@test.com") at tests/acceptance/RegisterPageCest.php:31
 4. $I->seeElement("#email") at tests/acceptance/RegisterPageCest.php:28

Artifacts:

Html: /var/www/e15/p3/tests/codeception/tests/_output/RegisterPageCest.userCanRegister.fail.html
Response: /var/www/e15/p3/tests/codeception/tests/_output/RegisterPageCest.userCanRegister.fail.html

FAILURES!
Tests: 1, Assertions: 3, Failures: 1.
root@hes:/var/www/e15/p3/tests/codeception# 