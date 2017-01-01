<?php

require_once '../loader.php';

$user = new \Steam\Application\Infrastructure\Proxy\UserProxy(76561198017244914);
$user->load();
