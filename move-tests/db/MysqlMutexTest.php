<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\tests\framework\mutex;

use yii\mutex\MysqlMutex;
use yii\tests\framework\db\DatabaseTestCase;

/**
 * Class MysqlMutexTest.
 *
 * @group mutex
 * @group db
 * @group mysql
 */
class MysqlMutexTest extends DatabaseTestCase
{
    use MutexTestTrait;

    protected $driverName = 'mysql';

    /**
     * @return MysqlMutex
     * @throws \yii\exceptions\InvalidConfigException
     */
    protected function createMutex()
    {
        return \Yii::createObject([
            '__class' => MysqlMutex::class,
            'db' => $this->getConnection(),
        ]);
    }
}
