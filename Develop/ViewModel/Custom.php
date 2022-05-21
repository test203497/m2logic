<?php
namespace Logic\Develop\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
/**
 * @ Logic\Develop\ViewModel\Custom
 */
class Custom implements ArgumentInterface
{
  public function getSomething()
  {
    return "Hello World";
  }
}
