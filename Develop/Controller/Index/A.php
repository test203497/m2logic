<?php
namespace Logic\Develop\Controller\Index;
/**
 * A class create..
 * @param Logic\Develop\Controller\Index\A
 */
class A extends \Magento\Framework\App\Action\Action
{
   protected $gridMsg;
   protected $gridthirdMsg;
   /**
     * @var \Logic\Develop\Model\GridMsg $gridMsg,
     * @var \Logic\Develop\Model\GridThirdMesg $gridthirdMsg,
     * @param \Magento\Framework\App\Action\Context $context
   */
  function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Logic\Develop\Model\GridMsg $gridMsg,
    \Logic\Develop\Model\GridThirdMesg $gridthirdMsg
    )
  {
    parent::__construct($context);
    $this->gridMsg = $gridMsg;
    $this->gridthirdMsg = $gridthirdMsg;
  }
  /**
   * Main function execute() create
   * @param \Logic\Develop\Model\GridMsg msg() function geting
  */
  public function execute()
  {
    //return $this->gridMsg->msg(5,7);
    $resultmsg = $this->girdMsgfunction();
    return $resultmsg;
  }
  public function girdMsgfunction()
  {
    $msgValue = $this->gridMsg->msg(6,7);
    echo $msgValue;
    echo "<br>";
    return $this->diffTwoValue();
    echo "</br>";
  }
  public function diffTwoValue()
  {
   $firstDiffValueOne = $this->gridthirdMsg->thirdMsgValue(1,2);
   echo $firstDiffValueOne;
   echo "<br>";
   $secondDiffValue = $this->gridthirdMsg->thirdMsgValue(3,2);
   echo $secondDiffValue;
   echo "<br>";
   $sameTwoValue = $this->gridthirdMsg->thirdMsgValue(2,2);
   echo $sameTwoValue;
  }
}
