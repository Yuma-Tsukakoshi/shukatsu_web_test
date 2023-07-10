<?php

// $word = fgets(STDIN);
$word = $argv[1];
$count = 0;
if ($word < "A" || $word > "Z") {
    $msg_error = 'standard error' . PHP_EOL;
    fputs(STDERR, $msg_error);
    exit();
}

for ($i = ord($word); $i <= ord("Z"); $i++) {
    $count++;
    echo chr($i);
}

echo PHP_EOL;
echo $count;
?>
