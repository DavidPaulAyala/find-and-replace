<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
    return $app['twig']->render('home.html.twig');
    });

    $app->post('/results', function() use($app) {
        $sentence = $_POST['sentence'];
        $inputWord = $_POST['word'];
        $inputRandomWord = $_POST['randWord'];

        $newFindAndReplace = new FindAndReplace();
        $result = $newFindAndReplace->replaceWord($sentence, $inputWord, $inputRandomWord);
        return $app['twig']->render('results.html.twig', array('result' => $result, 'oldSentence' => $sentence));
    });
    return $app;
 ?>
