# Rock Paper Scissors Game

##### A game app built using BDD methodology. 8/12/2015

#### By Logan Wu & Ian McKenney

## Description
It has both 1-player vs. computer version and two-player version.

## Technologies Used

PHP, HTML, CSS, Silex, Twig, PHPUnit, Composer

## Specs

1. If player 1 enters Rock and player 2 enters Scissors then Player 1 should win
  * Input: Player 1=Rock / Player 2=Scissors
  * Output: Player 1 wins!

2. If player 1 enters Rock and player 2 enters Paper then Player 1 should win
  * Input: Player 1=Rock / Player 2=Paper
  * Output: Player 1 wins!

3. If player 1 enters Paper and player 2 enters Scissors then Player 2 should win
  * Input: Player 1=Paper / Player 2=Scissors
  * Output: Player 2 wins!

4. If both players make the same choice then the game should result in a draw
  * Input: Player 1=rock / Player 2=rock
  * Output: Draw!

5. If player 2 enters Rock and player 1 enters Scissors then Player 1 should win
  * Input: Player 2=Rock / Player 1=Scissors
  * Output: Player 2 wins!

6. If player 2 enters Rock and player 1 enters Paper then Player 1 should win
  * Input: Player 2=Rock / Player 1=Paper
  * Output: Player 2 wins!

7. If player 2 enters Paper and player 1 enters Scissors then Player 2 should win
  * Input: Player 2=Paper / Player 1=Scissors
  * Output: Player 1 wins!

8. Same theory works between computer(chosen at random) and one player.

## Setup

* Open Terminal.
* Go into the ```web``` directory in ```rock_paper_scissors``` folder in the Terminal.
* Enter the following command into termianl ```php -S localhost:8000```.
* Open a web browser and type ```localhost:8000``` into the address bar.
* Requires Silex/Silex ~1.1 and Twig/Twig ~1.0 to be installed in the rock_paper_scissors project folder on the console by typing in ```composer install``` and ```composer update```.


## Legal

Copyright (c) 2015 **Logan Wu & Ian McKenney**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
