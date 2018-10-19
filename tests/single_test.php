<?php
    require 'vendor/autoload.php';

    class SingleTest extends TestingBotTest {

        public function testGoogle() {
            self::$driver->get("https://www.google.com/ncr");
            $element = self::$driver->findElement(WebDriverBy::name("q"));
            $element->sendKeys("TestingBot");
            $element->submit();
            self::$driver->wait(10, 500)->until(function($driver) {
              $elements = $driver->findElements(WebDriverBy::id("resultStats"));
              return count($elements) > 0;
            });
            $this->assertEquals('TestingBot - Google Search', self::$driver->getTitle());
        }

    }

?>