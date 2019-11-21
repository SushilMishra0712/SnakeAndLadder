<?php

define('STARTPOSITION',0);
$start_position = STARTPOSITION;
echo "Press Enter to roll the die";
fscanf(STDIN,"%s");
$random = rand(1,6);
echo "You got number ".$random."\n";
$checks = rand(0,2);
switch($checks)
{
	//Case No play
	case 0:
	echo "No play\n";
	$start_position+=0;
	break;

	//Case Ladder
	case 1:
	echo "Ladder received\n";
	$start_position+=$random;
	break;

	//Case Snake
	case 2:
	echo "Snake received\n";
	$start_position-=$random;
	break;

}
echo "You are at position:".$start_position."\n";

?>
