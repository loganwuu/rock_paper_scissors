<?php
    class RockPaperScissors
    {
        function rpsGame($player1_input, $player2_input)
        {
            if(($player1_input == "rock") && ($player2_input == "scissors")){
                return "Player 1 wins!";
            } elseif (($player1_input == "rock") && ($player2_input == "paper")){
                return "Player 1 wins!";
            } elseif (($player1_input == "paper") && ($player2_input == "scissors")){
                return "Player 2 wins!";
            } elseif ($player1_input == $player2_input){
                return "Draw!";
            }
        }
    }
?>
