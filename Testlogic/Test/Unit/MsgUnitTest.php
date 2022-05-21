<?php
namespace Logic\Testlogic\Test\Unit;
use Logic\Testlogic\Testing\MsgTest;
class MsgUnitTest extends \PHPUnit\Framework\TestCase
{
  /**
   * @var Logic\Testlogic\Testing\MsgTest
  */
  protected $msgTest;
  /**
  * @var string
  */
  protected $expectedMessage;
  public function setUp()
  {
    $ObjectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
    $this->msgTest = $ObjectManager->getObject('Logic\Testlogic\Testing\MsgTest');
    $this->expectedMessage = 'Hello, this is sample test';
  }
  public function testGetMessage()
  {
    $this->assertEquals($this->expectedMessage, $this->msgTest->getMessage());
  }
}
