<?php

include_once ('./employeeManager.php');

$method = $_SERVER['REQUEST_METHOD'];

/**
 * Create a New Employee
 */
if ($method == 'POST') {
  // echo "hola";
    addEmployee($_REQUEST);
    // var_dump($_REQUEST);
}