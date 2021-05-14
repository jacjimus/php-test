<?php
class Myclass
{

  public function sumDigitsIsTen($number)
  {
    $sum = array_sum(str_split($number));
    return $sum == 10;
  }
  public function numHasSeven($int)
  {
     $numArr = str_split($int);
    for ($i = 0; $i < count($numArr); $i++){
      if($numArr[$i] == 7)
        return true;
    }
    return false;
  }
}
