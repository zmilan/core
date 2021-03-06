<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\tests\framework\widgets;

use yii\widgets\ContentDecorator;

/**
 * @group widgets
 */
class ContentDecoratorTest extends \yii\tests\TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->mockWebApplication();
    }

    /**
     * @see https://github.com/yiisoft/yii2/issues/15536
     */
    public function testShouldTriggerInitEvent()
    {
        $initTriggered = false;

        $contentDecorator = new ContentDecorator(
            [
                'viewFile' => '@app/views/layouts/base.php',
                'on init' => function () use (&$initTriggered) {
                    $initTriggered = true;
                }
            ]
        );

        ob_get_clean();

        $this->assertTrue($initTriggered);
    }
}
