<?php
namespace Logic\Ajax\Controller\Index;
/**
 * @param Magento\Framework\App\Action\Action,
 * @param Magento\Framework\App\Action\Context,
 * @param Magento\Framework\View\Result\PageFactory
*/
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
/**
 * Index class extends Action
*/
class Index extends Action{
  /**
   * @var PageFactory $resultPageFactory
  */
  protected $resultPageFactory;
  /**
  * Constructor Create Context $context,PageFactory $resultPageFactory
  */
  public function __construct(
    Context $context,
    PageFactory $resultPageFactory
  )
  {
   parent::__construct($context);
   $this->resultPageFactory = $resultPageFactory;
  }
  /**
  * Execute view Action
  */
  public function execute()
  {
    return $this->resultPageFactory->create();
  }
}
