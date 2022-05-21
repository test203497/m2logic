<?php
namespace Logic\Develop\Controller\Index;
/**
 * Class Index
 * @param \Magento\Framework\App\Action\Action
 */
class Index extends \Magento\Framework\App\Action\Action
{
/**
 * @var \Magento\Framework\View\Result\PageFactory
*/
  protected $resultPageFactory;
  /**
   * Constructor
   * @param \Magento\Framework\App\Action\Context $context
  */
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
  {
    parent::__construct($context);
    $this->resultPageFactory = $resultPageFactory;
  }
  /**
   * Execute view action
   * @return \Magento\Framework\Controller\ResultInterface
  */
  public function execute()
  {
    return $this->resultPageFactory->create();
  }
}
