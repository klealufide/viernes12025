<?php
require_once 'app/config/db.php';

class Menu
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function create($name, $description, $image, $price)
    {
        $stmt = $this->db->prepare("INSERT INTO menu (name, description, image, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $name, $description, $image, $price);
        return $stmt->execute();
    }

    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM menu");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM menu WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $description, $image, $price)
    {
        $stmt = $this->db->prepare("UPDATE menu SET name=?, description=?, image=?, price=? WHERE id=?");
        $stmt->bind_param("sssdi", $name, $description, $image, $price, $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM menu WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

   
}
