<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('player1_form.html.twig');
    });

    $app->get("/player2", function() use ($app) {
        return $app['twig']->render('player2_form.html.twig');
    });

    $app->get("/view_result", function() use ($app) {
        $new_game = new RockPaperScissors;
        $result = $new_game->rpsGame($_GET['player_1'], $_GET['player_2']);
        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;
?>
