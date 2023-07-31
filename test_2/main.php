<?php 
$s = (int)fgets(STDIN);
if($s < 1 || $s > 2147483647){
  echo "OUT OF RANGE";
  exit;
}

if($s%3==0 && $s%5==0){
  echo "FizzBuzz";
}else if($s%3==0){
  echo "Fizz";
}else if($s%5==0){
  echo "Buzz";
}else{
  echo $s;
}
