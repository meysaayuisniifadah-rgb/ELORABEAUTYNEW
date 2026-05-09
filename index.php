<?php

require_once __DIR__ . "/core/Controller.php";
require_once __DIR__ . "/controllers/HomeController.php";

$home = new HomeController();
$home->index();