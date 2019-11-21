<?php

define('STARTPOSITION',0);
echo "Press Enter to roll the die";
fscanf(STDIN,"%s");
$random = rand(1,6);
echo "You got number ".$random."\n";

?>
