<?php
/**
 * @see       http://github.com/zendframework/zend-i18n-resources for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-i18n-resources/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\I18n\Translator;

use PHPUnit\Framework\TestCase;
use Zend\I18n\Translator\Resources;

class ResourceTest extends TestCase
{
    public function testBasePath()
    {
        $path = Resources::getBasePath();

        $this->assertDirectoryExists($path);
    }

    public function testCaptchaPattern()
    {
        $pattern = Resources::getPatternForCaptcha();

        $this->assertSame('%s/Zend_Captcha.php', $pattern);
    }

    public function testValidatorPattern()
    {
        $pattern = Resources::getPatternForValidator();

        $this->assertSame('%s/Zend_Validate.php', $pattern);
    }
}
