<?php
namespace Logic\Develop\Model;
use Magento\Framework\Model\AbstractModel;
/**
 * Class create
 * @param Logic\Develop\Model\GridMsg
*/
class GridMsg extends AbstractModel
{
/**
* Add to number of operend
*/
public function msg($a,$b){
   //echo "Welcome New Message";
  $c = $a+$b;
   echo $c;
 }
}
