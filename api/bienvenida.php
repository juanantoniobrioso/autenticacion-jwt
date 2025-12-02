<?php
header('Content-Type: application/json');

// Obtener las cabeceras de la petición
$headers = getallheaders();
$authHeader = $headers['Authorization'] ?? '';

// Array de usuarios 
$users = [
    'admin' => 'admin',
    'user' => 'user'
];

// Validar el token

$usernameDecoded = base64_decode($authHeader);

if (isset($users[$usernameDecoded])) {
    // Token válido 
    date_default_timezone_set('Europe/Madrid'); 
    
    echo json_encode([
        'username'  => $users[$usernameDecoded],
        'time'      => date('H:i')
    ]);
} else {
    // Token inválido o inexistente
    http_response_code(403);
    echo json_encode([
        'status' => 'error',
        'mensaje' => 'Acceso denegado'
    ]);
}
?>