<?php
// index.php

// Database connection
require_once 'config/database.php';

// Controllers
require_once 'controllers/ItemController.php';

// Create controller instances
$itemController = new ItemController($db);

// Handle routing
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'index':
        $itemController->index();
        break;
    case 'show':
        $itemController->show($id);
        break;
    case 'create':
        $itemController->create();
        break;
    case 'store':
        $itemController->store();
        break;
    case 'edit':
        $itemController->edit($id);
        break;
    case 'update':
        $itemController->update($id);
        break;
    case 'delete':
        $itemController->delete($id);
        break;
    // Uncomment jika ingin menambahkan fitur permanent delete
    // case 'permanent-delete':
    //     $itemController->permanentDelete($id);
    //     break;
    default:
        echo '404 Not Found';
        break;
}
?>