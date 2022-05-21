<?php
namespace Logic\Develop\Test\Unit\Model;
/**
 * @param Logic\Develop\Test\Unit\Model\GridMsg
 */
class GridMsg extends \PHPUnit\Framework\TestCase{
  protected function setUp()
  {
    $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
    $this->model = $this->objectManager->getObject("Logic\Develop\Model\GridMsg");
  }
  public function testmsg()
  {
    $result = $this->model->msg(10,20);
    $expectedResult = 30;
    $this->assertEquals($expectedResult,$result);
  }
}
