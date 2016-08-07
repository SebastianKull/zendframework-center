<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace CompanyBackendTest\Permissions\Resource;

use CompanyBackend\Permissions\Resource\ModifyResource;
use PHPUnit_Framework_TestCase;

/**
 * Class ModifyResourceTest
 *
 * @package CompanyBackendTest\Permissions\Resource
 */
class ModifyResourceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group company-backend
     * @group permissions
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(ModifyResource::class));
    }
}
