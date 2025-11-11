<?php
header('Content-Type: application/json');

include '../common/sessions.php';
include '../common/consts.php';
include '../common/db_connection.php';

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    echo json_encode([
        "status" => "error",
        "message" => "Username and password are required."
    ]);
    exit;
}


try {
    $stmt = $conn->prepare("SELECT emp_id, full_name, username, password, department, role FROM t_accounts WHERE username = :username");
    $stmt->execute([':username' => $username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid user."
        ]);
        $conn = null;
        exit;
    }

    if ($password == $user['password']) {
        $_SESSION['user'] = [
            'emp_id'       => $user['emp_id'],
            'full_name'     => $user['full_name'],
            'username' => $user['username'],
            'role'     => $user['role'],
        ];

        echo json_encode([
            "status" => "success",
            "message" => "Login successful",
            "role" => $user['role'],
        ]);
        $conn = null;
        exit;
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid password."
        ]);
        $conn = null;
        exit;
    }
} catch (PDOException $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Database error: " . $e->getMessage()
    ]);
    $conn = null;
    exit;
}
