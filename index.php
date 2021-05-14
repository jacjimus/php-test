<?php
include  "Myclass.php";
Class MyNumber extends Myclass
{
  public function myNum()
  {
    $count = 0;
    $num = 0;
    while ($count <= 10 ){
      if($this->sumDigitsIsTen($num) && $this->numHasSeven($num)){
        echo "<pre>";
        echo $num;
        echo "</pre>";
        $count++;
      }
      $num++;
    }
  }
}

$class = new MyNumber;
$class->myNum();
