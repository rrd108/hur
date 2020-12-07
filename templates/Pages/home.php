<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <main>
        <h1>Magyar infó API</h1>
        <p>Magyar irányítószámok, városok lekérésére szolgáló API.</p>

        <h2>Használat</h2>
        <p>A lekérdezésekhez HTTP requested kell küldeni.</p>

        <h2>Javaslatok, hibák</h2>
        <p>Ha hibát találtál, vagy ötleted van akkor írj a <a href="https://github.com/rrd108/hur">github repóba</a></p>

        <h2>Szolgáltatások</h2>
        <ul>
            <li>Irányítószámok</li>
            <li>Nevek (tervezett)</li>
        </ul>

        <h3>Irányítószámok</h3>

        <h4>Település név alapján irányítószám lekérése</h4>
        <p>
            A lekérés: <code>GET http://hur.webmania.cc/zips/Békés.json</code>
        </p>

        <p>
            A válasz:
            <pre>
{
  "zips": [
    {
      "id": 1851,
      "country_id": 1,
      "zip": "5630",
      "name": "Békés",
      "lat": 46.798691,
      "lng": 21.112356,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    },
    {
      "id": 1852,
      "country_id": 1,
      "zip": "5631",
      "name": "Békés",
      "lat": 46.193275,
      "lng": 18.731958,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    }
  ]
}</pre>
        </p>


        <h4>Irányítószám alapján települések lekérése</h4>
        <p>
            A lekérés: <code>GET http://hur.webmania.cc/zips/7300.json</code>
        </p>
        <p>
            A válasz:
            <pre>
  {
  "zips": [
    {
      "id": 2337,
      "country_id": 1,
      "zip": "7300",
      "name": "Mecsekpölöske",
      "lat": 46.223286,
      "lng": 18.211739,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    },
    {
      "id": 2338,
      "country_id": 1,
      "zip": "7300",
      "name": "Komló",
      "lat": 46.192978,
      "lng": 18.251213,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    }
  ]
}
            </pre>
        </p>
    </main>
</body>
</html>
