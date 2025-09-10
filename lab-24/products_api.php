<?php
header("Content-Type: application/json");
include 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

switch($method) {

    // GET - Read
    case 'GET':
        if($id > 0){
            $result = $mysqli->query("SELECT p.id, p.name, p.price, c.name as category 
                                      FROM products p 
                                      JOIN categories c ON p.category_id = c.id
                                      WHERE p.id = $id");
            $data = $result->fetch_assoc();
        } else {
            $result = $mysqli->query("SELECT p.id, p.name, p.price, c.name as category 
                                      FROM products p 
                                      JOIN categories c ON p.category_id = c.id");
            $data = [];
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
        break;

    // POST - Create
    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        $name  = $mysqli->real_escape_string($input['name']);
        $price = floatval($input['price']);
        $category_id = intval($input['category_id']);

        $mysqli->query("INSERT INTO products(name, price, category_id) VALUES ('$name', $price, $category_id)");
        echo json_encode(["message" => "Product added successfully"]);
        break;

    // PUT - Update
    case 'PUT':
        $input = json_decode(file_get_contents("php://input"), true);
        $name  = $mysqli->real_escape_string($input['name']);
        $price = floatval($input['price']);
        $category_id = intval($input['category_id']);

        $mysqli->query("UPDATE products SET name='$name', price=$price, category_id=$category_id WHERE id=$id");
        echo json_encode(["message" => "Product updated successfully"]);
        break;

    // DELETE - Delete
    case 'DELETE':
        $mysqli->query("DELETE FROM products WHERE id=$id");
        echo json_encode(["message" => "Product deleted successfully"]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

$mysqli->close();
?>
