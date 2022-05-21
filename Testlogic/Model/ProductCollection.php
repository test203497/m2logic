<?php
namespace Logic\Testlogic\Model;
/**
 * class ProductCollection
*/
class ProductCollection extends \Magento\Framework\Model\AbstractModel
{
  /**
   *@var \Magento\Catalog\Model\ProductFactory
  */
  protected $productFactory;
  public function __construct(
    \Magento\Framework\Model\Context $context,
    \Magento\Framework\Registry $registry,
    \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
    \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
    \Magento\Catalog\Model\ProductFactory $productFactory,
    array $data = []
    )
    {
      $this->productFactory = $productFactory;
      parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
    /**
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
    */
    public function getProductsCollection()
    {
      /**
       * @var $product \Magento\Catalog\Model\Product
      */
      $product = $this->productFactory->create();
      /**@var $collection \Magento\Catalog\Model\ResourceModel\Product\Collection */
      $collection = $product->getCollection();
      $collection->addAttributeToSelect('name', true)->addAttributeToFilter('status', ['in'=>[1]])->setOrder('name');
      return $collection;
    }
}
