<?php
    require 'vendor/autoload.php';
    use Facebook\WebDriver\WebDriverBy;

    class SingleTest extends TestingBotTest {

        public function testGoogle() {
            self::$driver->get("https://www.google.com/ncr");
            $element = self::$driver->findElement(WebDriverBy::name("q"));
            $element->sendKeys("TestingBot");
            $element->submit();
	    sleep(3);
            $this->assertEquals('TestingBot - Google Search', self::$driver->getTitle());
        }

    }

?>
