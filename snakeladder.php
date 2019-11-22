<?php

define('STARTPOSITION',0);
define('WINPOSITION',100);
$player1_position = STARTPOSITION;
$player2_position = STARTPOSITION;
$dice_roll_count = 0;
while(!($player1_position == WINPOSITION || $player2_position == WINPOSITION))
{
//Player1 Turn
//random function to roll the dice
$random_outcome_player1 = rand(1,6);
$dice_roll_count++;

//random function to check options No play,ladder or snake
$check_option_player2 = rand(0,2);
switch($check_option_player2)
{
	//Case No play
	case 0:
	echo "\nNo of times dice rolled:".$dice_roll_count."\n";
	echo "No play\n";
	$player1_position+=0;
	break;

	//Case Ladder
	case 1:
	echo "\nNo of times dice rolled:".$dice_roll_count."\n";
	echo "Ladder received\n";
	$player1_position += $random_outcome_player2;
	if($player1_position>100)
	{
	   $player1_position -= $random_outcome_player2; 
	}
	break; 

	//Case Snake
	case 2:
	echo "\nNo of times dice rolled:".$dice_roll_count."\n";
	echo "Snake received\n";
	$player1_position-=$random_outcome_player1;
	if($player1_position<0)
	{
	   $player1_position = STARTPOSITION;
	}
	break;

}
echo "Player1 is at position:".$player1_position."\n";

//Player1 Turn
//random function to roll the dice
$random_outcome_player2 = rand(1,6);

//random function to check options No play,ladder or snake
$check_option_player2 = rand(0,2);
switch($check_option_player2)
{
        //Case No play
        case 0:
        echo "No play\n";
        $player2_position+=0;
        break;

        //Case Ladder
        case 1:
        echo "Ladder received\n";
        $player2_position += $random_outcome_player2;
        if($player2_position>100)
        {
           $player2_position -= $random_outcome_player2; 
        }
        break; 
	        //Case Snake
        case 2:
        echo "Snake received\n";
        $player2_position-=$random_outcome_player2;
        if($player2_position<0)
        {
           $player2_position = STARTPOSITION;
        }
        break;

}
echo "Player2 is at position:".$player2_position."\n";

}

echo "\nAt the end of game\n";
if($player1_position>$player2_position)
{
   echo "Congrats Player1 is the Winner\n";
}
else
{
   echo "Congrats Player2 is the Winner\n";
}
?>

