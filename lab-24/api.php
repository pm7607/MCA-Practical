<?php
header("Content-Type: application/json");
include 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

switch($method) {
    // GET - Read the data 
    case 'GET':
        if($id > 0){
            $result = $mysqli->query("SELECT * FROM students WHERE id = $id");
            $data = $result->fetch_assoc();
        } else {
            $result = $mysqli->query("SELECT * FROM students");
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
        $email = $mysqli->real_escape_string($input['email']);
        $age   = intval($input['age']);

        $mysqli->query("INSERT INTO students(name, email, age) VALUES ('$name', '$email', $age)");
        echo json_encode(["message" => "Student added successfully"]);
        break;

    // PUT - Update
    case 'PUT':
        $input = json_decode(file_get_contents("php://input"), true);
        $name  = $mysqli->real_escape_string($input['name']);
        $email = $mysqli->real_escape_string($input['email']);
        $age   = intval($input['age']);

        $mysqli->query("UPDATE students SET name='$name', email='$email', age=$age WHERE id=$id");
        echo json_encode(["message" => "Student updated successfully"]);
        break;

    // DELETE - Delete
    case 'DELETE':
        $mysqli->query("DELETE FROM students WHERE id=$id");
        echo json_encode(["message" => "Student deleted successfully"]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

$mysqli->close();
?>


