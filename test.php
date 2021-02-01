<?php
$height = 140;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。" . "\n";
} else {
  echo "ご乗車できます。" . "\n";
}

$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。" . "\n";
}else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}
//=> "200cm 以上の方はご乗車できません。" が表示される。

$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
//=> 可燃ごみの日です。 が表示される
  
echo "\n"; 
$name = "YUMIKO";
if ($name =="YUMIKO") {
  echo  "私は あなたの名前です" . "\n"; 
} else {
  echo "あなたの名前ではありません。" ."\n";
}
$total = 0;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理をおこなう。
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
//=> 5050 と表示される。
echo $total;
echo "\n"; 
$fruits = array("apple", "orange", "lemon","banana","Strawberry");
foreach($fruits as $lemon){
  echo "要素は" . $lemon;
  echo "\n";
}
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <=$end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
