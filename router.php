<?php
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/MenuController.php';

$action = $_GET['action'] ?? '';

$auth = new AuthController();
$menu = new MenuController();

switch ($action) {
    case 'login':
        $auth->login();
        break;
    case 'register':
        $auth->register();
        break;
    case 'createMenu':
        $menu->create();
        break;
    case 'listMenu':
        $menu->list();
        break;
    case 'showMenu':
        $menu->show();
        break;
    case 'updateMenu':
        $menu->update();
        break;
    case 'deleteMenu':
        $menu->delete();
        break;
    default:
        echo json_encode(['status' => 'error', 'message' => 'Ruta no encontrada']);
}
