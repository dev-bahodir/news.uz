<?php
$url = env('JAWSDB_URL');
$dbparts = parse_url($url);
$hostname = isset($dbparts['host']) ? $dbparts['host'] : "localhost";
$username = isset($dbparts['user']) ? $dbparts['user'] : "root";
$password = isset($dbparts['pass']) ? $dbparts['pass'] : "antifragile";
$database = isset($dbparts['path']) ? ltrim($dbparts['path'], '/') : "restapi";

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => \yii\console\controllers\FixtureController::class,
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=' . $hostname . ';dbname=' . $database,
            'username' => $username,
            'password' => $password,
            'charset' => 'utf8',
        ],
    ],
    'params' => $params,
];
