<?php 
require('./model/database.php');
require('./model/vehicles_db.php');
require('./model/makes.php');
require('./model/types.php');
require('./model/classes.php');
/*
$year = $_POST['year'] ?? '';
$model = $_POST['model'] ?? '';
$price = $_POST['price'] ?? '';
$make_ID = $_POST['make_ID'] ?? '';
$type_ID = $_POST['type_ID'] ?? '';
$class_ID = $_POST['class_ID'] ?? '';
*/

/*
if ($action == 'vehicles') {
    $make_ID = filter_input(INPUT_GET, 'make', FILTER_SANITIZE_STRING);
    if ($make_id == NULL || $make_id == FALSE) {
        $make_id = 1;
    }
    $type_ID = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING); 
    if ($type_id == NULL || $type_id == FALSE) {
        $type_id = 1;
    }
    $class_ID = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);
    if ($class_id == NULL || $class_id == FALSE) {
        $class_id = 1;
    }
}

    $vehicles = list_all_vehicles();
    if (is_iterable($vehicles))
        foreach ($values as $value);

*/
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
        $action = 'get_all_vehicles';
    }
}
/*
$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_makes';
    }
}

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_types';
    }
}
$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_all_classes';
    }
}
*/
switch($action) {
    case 'get_all_makes':
        $makes = get_all_makes();
        include('./view/vehicles_list.php');
        break;
    case 'get_all_types':
        $types = get_all_types();
        include('./view/vehicles_list.php');
        break;
    case 'get_all_classes':
        $classes = get_all_classes();
        include('./view/vehicles_list.php');
        break;
    case 'get_all_vehicles':
        $vehicles = get_all_vehicles();
        include('./view/vehicles_list.php');
        break;
    default :
        $vehicles = get_all_vehicles();
        include('./view/vehicles_list.php');
        break;
    }



?>
