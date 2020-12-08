<?php
return [
  'Cors' => [
    'AllowOrigin' => '*',
    'AllowMethods' => ['GET', 'OPTIONS'],
    'AllowHeaders' => ['ApiKey', 'Content-Type'],
    'MaxAge' => 300,
  ]
];