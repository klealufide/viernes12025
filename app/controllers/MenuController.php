<?php
require_once 'app/models/Menu.php';

class MenuController {
    public function create() {
        $product = new Menu();

        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $image = $_POST['image'] ?? '';
        $price = $_POST['price'] ?? 0;

        if ($product->create($name, $description, $image, $price)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se pudo crear el producto']);
        }
    }

    public function list() {
        $product = new Menu();
        $products = $product->getAll();

        echo json_encode(['status' => 'success', 'data' => $products]);
    }

    public function show() {
        $product = new Menu();
        $id = $_GET['id'] ?? 0;

        $item = $product->getById($id);

        if ($item) {
            echo json_encode(['status' => 'success', 'data' => $item]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Producto no encontrado']);
        }
    }

    public function update() {
        $product = new Menu();

        $id = $_POST['id'] ?? 0;
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $image = $_POST['image'] ?? '';
        $price = $_POST['price'] ?? 0;

        if ($product->update($id, $name, $description, $image, $price)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se pudo actualizar']);
        }
    }

    public function delete() {
        $product = new Menu();
        $id = $_POST['id'] ?? 0;

        if ($product->delete($id)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se pudo eliminar']);
        }
    }
}
