<?php

require 'vendor/autoload.php';
require 'lib/globals.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;

class TestingBotTest extends PHPUnit\Framework\TestCase
{
    protected static $driver;

    public static function setUpBeforeClass()
    {
        $CONFIG = $GLOBALS['CONFIG'];
        $task_id = getenv('TASK_ID') ? getenv('TASK_ID') : 0;

        $url = "https://" . $GLOBALS['TB_KEY'] . ":" . $GLOBALS['TB_SECRET'] . "@hub.testingbot.com/wd/hub";
        $caps = $CONFIG['environments'][$task_id];

        foreach ($CONFIG["capabilities"] as $key => $value) {
            if(!array_key_exists($key, $caps))
                $caps[$key] = $value;
        }

        self::$driver = RemoteWebDriver::create($url, $caps, 120000, 120000);
    }

    public static function tearDownAfterClass()
    {
        self::$driver->quit();
    }
}
?>
