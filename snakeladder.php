<?php

define('STARTPOSITION',0);
define('WINPOSITION',100);
$start_position = STARTPOSITION;
while($start_position != WINPOSITION)
{
$random = rand(1,6);
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
	if($start_position<0)
	{
	$start_position = STARTPOSITION;
	}
	break;

}
echo "You are at position:".$start_position."\n";
}
?>
