<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1_input = "rock";
            $player2_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }

        function test_rock_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1_input = "rock";
            $player2_input = "paper";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }

        function test_paper_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1_input = "paper";
            $player2_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }

        function test_drawGame()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1_input = "rock";
            $player2_input = "rock";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Draw!", $result);
        }

        function test_scissors_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player2_input = "rock";
            $player1_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }

        function test_paper_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1_input = "paper";
            $player2_input = "rock";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 2 wins!", $result);
        }

        function test_scissors_paper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player2_input = "paper";
            $player1_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->rpsGame($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 1 wins!", $result);
        }
    }
?>
