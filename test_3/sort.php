<?php

$n = (int)fgets(STDIN);
$arr = explode(" ", fgets(STDIN));

// バブルソートによって昇順ソート
for ($i=0;$i<$n;$i++){
  for ($j=0;$j<$n-1-$i;$j++){
    if($arr[$j] > $arr[$j+1]){
      $tmp = $arr[$j];
      $arr[$j] = $arr[$j+1];
      $arr[$j+1] = $tmp;
    }
  }
}

// ソート後の配列出力
for ($i=0;$i<$n;$i++){
  echo $arr[$i];
  echo " ";
}


?>
