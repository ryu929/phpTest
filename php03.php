<?php


//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($max) {
  
    $max *=2;

    return $max;
}

// 関数を実行
echo sum(24) . "\n";

echo '<br>';

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
    return $a + $b;
    }

echo f(30,4);
echo '<br>';
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

$bb = array(1,3, 5 ,7, 9);

function fa($arr){
    $result = 1;
    foreach ($arr as $a) {
       $result *= $a;
 
    }

 
    return $result;
}

echo fa($bb);
echo '<br>';

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

$bbb = array(1,3333, 5 ,7, 99);


function max_array($arr) {
    // とりあえず配列の最初の要素を1番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {

     if ($max_number < $a){
         $max_number = $a;
     } 

    }
    
    return $max_number;
    }

echo max_array($bbb);
echo '<br>';


//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。
$nogizaka = "<p>maiy<asa>ankawaii";

 echo strip_tags($nogizaka,"<pa>");

 echo '<br>';

 $members=array("一郎","二郎","三郎");
 array_push($members,"四郎","五郎");
 print_r($members);

 echo '<br>';
 $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo '<br>';

$time = mktime(0, 0, 0, 1, 1, 2020);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<br/>');

echo date("l");


?>
