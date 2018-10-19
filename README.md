[![Build Status](https://travis-ci.org/testingbot/php-phpunit-example.svg?branch=master)](https://travis-ci.org/testingbot/php-phpunit-example)

## TestingBot - PHPUnit Example

TestingBot provides an online grid of browsers and mobile devices to run Automated tests on via Selenium WebDriver.
This example demonstrates how to use PHP with PHPUnit to run a test in parallel across several browsers.

### Environment Setup

1. Global Dependencies
    * Install [Composer](https://getcomposer.org/download/)
    ```
    $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	$ php composer-setup.php
	$ php -r "unlink('composer-setup.php');"
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
