<?php
session_start();
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if ($data && isset($data['email'])) {
    // Guardar los datos directamente en variables de sesión
    $_SESSION['user_nombre'] = $data['nombre'];
    $_SESSION['user_email'] = $data['email'];
    $_SESSION['user_foto'] = $data['foto'];

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>