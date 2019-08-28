<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');

$client = (new \InstagramWeb\Client())
    ->setProxy("http://127.0.0.1:8030")
    ->setVerifySsl(false)
    ->setRetry(429, 5)
    ->setRetry(400, 5);

$client->profile->getFollowings('2128436070');

$client->profile->getFollowers('2128436070');