<?php
//　課題１
function nibai($a) { 
  //処理したい内容
  return $a * 2;
}
echo nibai(3); 
echo "\n";

// 課題２
function purasu($a, $b){
 return $a+$b;
 } 
 $result=purasu(3,4);
 echo $result; 
 echo "\n";
 

// 課題3
function kakezan($arr ){
  $apple=1;
  foreach($arr as $mac){
    $apple=$apple*$mac; 
    echo $apple;
    echo "\n";
  }
  return $apple;
  
} 
 $result=kakezan(array(1, 3, 5 ,7, 9) );
 echo $result; 
 echo "\n";
 
 //課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number <$a){
   $max_number=$a;
 }
 }

 return $max_number;
 }
 $result=max_array (array(1, 3, 15 ,7, 9) );
 echo $result; 
 echo "\n";