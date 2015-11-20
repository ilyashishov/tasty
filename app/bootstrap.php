<?php
session_start();
require_once 'bl/bl_init.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
require_once 'lib/Twig/Autoloader.php';

Twig_Autoloader::register();
Route::start();