<?php
namespace Logic\Testlogic\Test\Unit\Model;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;
 /**
  * class ProductCollectionTest
 */
 class ProductCollectionTest extends \PHPUnit\Framework\TestCase
 {
   /**
    * @var \Logic\Testlogic\Model\ProductCollection
   */
   protected $productCollection;
   /**
    * @var ObjectManagerHelper
   */
   protected $objectManagerHelper;
   /**
    * \PHPUnit_Framework_MockObject_MockObject| \Magento\Catalog\Model\ProductFactory
   */
   protected $productFactory;
   /**
    * @var \PHPUnit_Framework_MockObject_MockObject| \Magento\Catalog\Model\Product
   */
   protected $product;
   protected function setUp()
   {
     $this->product = $this->createMock(\Magento\Catalog\Model\Product::class);
     $this->productFactory = $this->createMock(\Magento\Catalog\Model\ProductFactory::class, ['create']);
     $this->productFactory->expects($this->any())->method('create')->will($this->returnValue($this->product));
     $this->objectManagerHelper = new ObjectManagerHelper($this);
     $this->productCollection = $this->objectManagerHelper->getObject(
       \Logic\Testlogic\Model\ProductCollection::class,
     [
         'productFactory'=>$this->ProductFactory
     ]
     );
   }
   public function testGetProductsCollection()
   {
     /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection*/
     $productCollection = $this->createMock(\Magento\Catalog\Model\ResourceModel\Product\Collection::class);
     $this->product->expects($this->once())->method('getCollection')->will($this->returnValue($productCollection));
     $productCollection->expects($this->once())->method('addAttributeToSelect')->will($this->returnSelf());
     $productCollection->expects($this->once())->method('addAttributeToFilter')->will($this->returnSelf());
     $productCollection->expects($this->once())->method('setOrder')->will($this->returnSelf());
     $products = $this->productCollection->getProductsCollection();
     $this->assertEquals($productCollection, $products);
   }
 }
