<?php
header('Content-Type: application/json');

// Array de los usuarios
$users = [
    ['username' => 'admin', 'password' => '1234'],
    ['username' => 'user',  'password' => 'abcd']
];

// Obtener los datos JSON enviados por el fetch
$input = json_decode(file_get_contents('php://input'), true);

$userSent = $input['username'] ?? '';
$passSent = $input['password'] ?? '';

$isAuthenticated = false;
$userFound = null;

// Validar credenciales
foreach ($users as $user) {
    if ($user['username'] === $userSent && $user['password'] === $passSent) {
        $isAuthenticated = true;
        $userFound = $user;
        break;
    }
}

if ($isAuthenticated) {
    // Generar un token 
    $token = base64_encode($userFound['username']);
    
    echo json_encode([
        'status' => 'success',
        'token'  => $token
    ]);
} else {
    // Credenciales incorrectas
    http_response_code(401);
    echo json_encode([
        'status' => 'error',
        'message' => 'Usuario o contraseña incorrectos'
    ]);
}
?>