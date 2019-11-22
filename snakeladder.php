<?php

define('STARTPOSITION',0);
define('WINPOSITION',100);
$start_position = STARTPOSITION;
$dice_roll_count = 0;
while($start_position != WINPOSITION)
{
//random function to roll the dice
$random = rand(1,6);
$dice_roll_count++;

//random function to check options No play,ladder or snake
$checks = rand(0,2);
switch($checks)
{
	//Case No play
	case 0:
	echo "No play\n";
	$start_position+=0;
	echo "No of time dice rolled:".$dice_roll_count."\n";
	break;

	//Case Ladder
	case 1:
	echo "Ladder received\n";
	$start_position += $random;
	if($start_position>100)
	{
	   $start_position -= $random; 
	}
	echo "No of time dice rolled:".$dice_roll_count."\n";
	break; 

	//Case Snake
	case 2:
	echo "Snake received\n";
	$start_position-=$random;
	if($start_position<0)
	{
	   $start_position = STARTPOSITION;
	}
	echo "No of time dice rolled:".$dice_roll_count."\n";
	break;

}
echo "You are at position:".$start_position."\n";
}
?>
