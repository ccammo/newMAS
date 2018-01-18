<?php

/**
 * Configuration for database connection
 *
 */

$host       = "162.241.224.44";
$username   = "yokotasp_admin";
$password   = "Password1!";
$dbname     = "test"; //will use later
$dsn        = "mysql:host=$162.241.224.44;dbname=$yokotasp_test"; //will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );