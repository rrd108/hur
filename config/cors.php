<?php
# config/cors.php
return [
  'Cors' => [
    'AllowOrigin' => 'http://localhost:8080',
    'AllowMethods' => ['GET', 'OPTIONS'],
    'AllowHeaders' => ['ApiKey', 'Content-Type'],
    'MaxAge' => 300,
  ]
];