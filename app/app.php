<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();
    if(empty($_SESSION['players_choices'])){
        $_SESSION['players_choices'] = array();
    }

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/computer", function() use ($app){
        return $app['twig']->render('computer.html.twig');
    });

    $app->get("/computer_result", function() use ($app){
        $new_game = new RockPaperScissors;
        $computer_choices = array("rock", "paper", "scissors");
        $computer_choice = $computer_choices[array_rand($computer_choices)];

        $result = $new_game->rpsGame($_GET['player'], $computer_choice);

        $player_wins = array();
        $draw_game = array();
        if ($result == "Player 1 wins!") {
            array_push($player_wins, "Player 1 wins!");
        } elseif ($result == "Draw!") {
            array_push($draw_game, "Draw!");
        }
        return $app['twig']->render('computer_result.html.twig', array('result' => $result, 'player_wins' => $player_wins, 'draw_game' => $draw_game, 'computer_choice' => $computer_choice, 'player_choice' => $_GET['player']));
    });

    $app->get("/player1", function() use ($app) {
        $_SESSION['players_choices'] = array();
        return $app['twig']->render('player1_form.html.twig');
    });

    $app->post("/player2", function() use ($app) {
        array_push($_SESSION['players_choices'], $_POST['player1']);
        // $test = var_dump($_SESSION['players_choices']);
        return $app['twig']->render('player2_form.html.twig' /*array('test' => $test)*/);
    });

    $app->post("/view_result", function() use ($app) {
        $new_game = new RockPaperScissors;
        array_push($_SESSION['players_choices'], $_POST['player2']);
        $result = $new_game->rpsGame($_SESSION['players_choices'][0], $_SESSION['players_choices'][1]);
        // $test = var_dump($_SESSION['players_choices']);
    return $app['twig']->render('result.html.twig', array('result' => $result, 'player1_choice' => $_SESSION['players_choices'][0], 'player2_choice' => $_SESSION['players_choices'][1] /*,'test' => $test)*/));
    });

    return $app;
?>
