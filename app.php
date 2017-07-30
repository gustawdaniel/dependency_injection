<?php

require __DIR__.'/vendor/autoload.php';

use DiDemo\Mailer\SmtpMailer;
use DiDemo\FriendHarvester;

// CONTAINER START BUILDING

$container = new Pimple();

require 'app/config.php';
require 'app/service.php';

// CONTAINER END BUILDING

$friendHarvester = $container['harvester'];
$friendHarvester->harvest();