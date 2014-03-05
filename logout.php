<?php
/**
 * Created by PhpStorm.
 * User: star
 * Date: 16/2/14
 * Time: 10:55 PM
 */

session_start();
session_destroy();
header('Location: login.html');