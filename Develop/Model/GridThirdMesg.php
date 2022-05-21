<?php
namespace Logic\Develop\Model;
/**
  * @param Magento\Framework\Model\AbstractModel
*/
use Magento\Framework\Model\AbstractModel;
/**
 * Class inisiate AbstractModel
*/
class GridThirdMesg extends AbstractModel
{
  /**
   * Write a program to compute the sum of the two given integer values.
   * If the two values are the same,then return triple their sum.
*/
 public function thirdMsgValue($x,$y)
 {
  /**
   * sum of two value but two values are not same like 1+2=3,3+2=5
   * Two values are same,so return triple 2+2=4x3=12
*/
  return $x==$y ? ($x + $y)*3 : $x + $y;
 }
}
