﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ********1
// *******121
// ******12321
// *****1234321
// ****123454321
// ***12345654321
// **1234567654321
// *123456787654321
// 12345678987654321

for ($a = 1 ; $a <= 9 ; $a ++) {
  if ($a <= 9) {
    for($b = 8 ; $b >= $a ; $b --) {
      echo "*";
    }
    for($c = 1; $c <= $a ; $c++) {
      echo $c;
    }
    for($d = $c -2 ; $d >= 1 ; $d--) {
      echo $d;
    }
    echo  "<br>";
  }
}

?>