<?php

use DiDemo\FriendHarvester;
use DiDemo\Mailer\SmtpMailer;

$container['harvester'] = $container->share(function (Pimple $container) {
    return new FriendHarvester($container['pdo'],$container['mailer']);
});

$container['mailer'] = $container->share(function (Pimple $container) {
    return new SmtpMailer(
        $container['smtp.host'],
        $container['smtp.user'],
        $container['smtp.pass'],
        $container['smtp.port']
    );
});

$container['pdo'] = $container->share(function (Pimple $container) {
    return new PDO($container['pdo.dsn']);
});