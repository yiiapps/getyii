<?php

$MYSQL_PORT_3306_TCP_ADDR = env('MYSQL_PORT_3306_TCP_ADDR', '10.0.75.1');
$MYSQL_DB_NAME = env('MYSQL_INSTANCE_NAME', 'getyii');
$MYSQL_USERNAME = env('MYSQL_USERNAME', 'root');
$MYSQL_PASSWORD = env('MYSQL_PASSWORD', 'root');

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $MYSQL_PORT_3306_TCP_ADDR . ';dbname=' . $MYSQL_DB_NAME,
    'username' => $MYSQL_USERNAME,
    'password' => $MYSQL_PASSWORD,
    'charset' => 'utf8mb4',
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'cache',
];

return $db;
