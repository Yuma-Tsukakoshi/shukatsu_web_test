<?php
$n = (int)fgets(STDIN);

$ans = $n**0.5;
if($ans == (int)$ans){
  echo $ans;
}else{
  echo -1;
}

?>
