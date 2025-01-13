<?php

if (YII_ENV_DEV) {
    return [

        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=awi_activity',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',

        // 'class' => 'yii\db\Connection',
        // 'dsn' => 'mysql:host=localhost;dbname=u317795127_gmactivity',
        // 'username' => 'u317795127_nuiip',
        // 'password' => 'g03T0&2ptB*#',
        // 'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
} else {
    return [
    
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=u317795127_gmactivity',
        'username' => 'u317795127_yiip_basic',
        'password' => 'g03T0&2ptB*#',
        'charset' => 'utf8',
    
        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}
