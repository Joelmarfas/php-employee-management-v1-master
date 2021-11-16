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

/**
 * Delete Employee
 */
if ($method == 'DELETE') {
  $_delete = file_get_contents('php://input');
  $delete = deleteEmployee(substr($_delete, 3));
}