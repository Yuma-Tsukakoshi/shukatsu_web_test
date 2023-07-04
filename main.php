<?php

$word = fgets(STDIN);
for ($i = ord($word); $i <= ord("Z"); $i++) {
    echo chr($i);
}

?>
