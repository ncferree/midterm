<?php

require('model/database.php');
require('model/vehicles_db.php');
require('model/makes.php');
require('model/types.php');
require('model/classes.php');

$vehicleID = filter_input(INPUT_GET, 'vehicle_ID', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_GET, 'model', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_GET, 'price', FILTER_VALIDATE_INT);
$makes = filter_input(INPUT_GET, 'make', FILTER_SANITIZE_STRING);
$types = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);
$classes = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action == 'get_all_types';
    }
}

switch($action) {
    case 'add_type':
        $classID = add_type($typeID, $type);
        include('./view/types.php');
        break;
    case 'delete_type':
        $classID = delete_type($typeID, $type);
        include('./view/types.php');
        break;
    default :
        $types = get_all_types();
        include('./view/types.php');
        break;
    }