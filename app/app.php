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

    $app->get("/", function() use ($app) {
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
        $_SESSION['players_choices'] = array();
    return $app['twig']->render('result.html.twig', array('result' => $result /*,'test' => $test)*/));
    });

    return $app;
?>
