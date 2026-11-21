<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';

foreach ([
    Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
    Illuminate\Foundation\Bootstrap\LoadConfiguration::class,
    Illuminate\Foundation\Bootstrap\HandleExceptions::class,
    Illuminate\Foundation\Bootstrap\RegisterFacades::class,
    Illuminate\Foundation\Bootstrap\SetRequestForConsole::class,
    Illuminate\Foundation\Bootstrap\RegisterProviders::class,
    Illuminate\Foundation\Bootstrap\BootProviders::class,
] as $class) {
    try {
        (new $class)->bootstrap($app);
        echo "OK  : $class\n";
    } catch (Throwable $e) {
        echo "ERREUR dans $class\n";
        $n = 0;
        while ($e) {
            echo "#".$n++." ".get_class($e).' : '.$e->getMessage()."\n";
            foreach (array_slice($e->getTrace(), 0, 10) as $t) {
                echo '   '.($t['file'] ?? '?').':'.($t['line'] ?? '?').' '.($t['class'] ?? '').($t['type'] ?? '').$t['function']."\n";
            }
            $e = $e->getPrevious();
        }
        break;
    }
}
