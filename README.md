[![Build Status](https://travis-ci.org/testingbot/php-phpunit-example.svg?branch=master)](https://travis-ci.org/testingbot/php-phpunit-example)

## TestingBot - PHPUnit Example

TestingBot provides an online grid of browsers and mobile devices to run Automated tests on via Selenium WebDriver.
This example demonstrates how to use PHP with PHPUnit to run a test in parallel across several browsers.

### Environment Setup

1. Global Dependencies
    * Install [Composer](https://getcomposer.org/download/)
    ```
	curl http://getcomposer.org/installer | php
    ```
   

2. Project Dependencies
    * Clone the repository
	* Install all dependencies `composer install`

3. TestingBot Credentials
    * Add your TestingBot Key and Secret as environmental variables. You can find these in the [TestingBot Dashboard](https://testingbot.com/members/).
    ```
    $ export TB_KEY=<your TestingBot Key>
    $ export TB_SECRET=<your TestingBot Secret>
    ```


### Running Tests

* To run a single test, run `composer single`
* To run parallel tests, run `composer parallel`

You will see the test result in the [TestingBot Dashboard](https://testingbot.com/members/)

### Resources
##### [TestingBot Documentation](https://testingbot.com/support/)

##### [SeleniumHQ Documentation](http://www.seleniumhq.org/docs/)

##### [PHPUnit Documentation](https://phpunit.de/documentation.html)
