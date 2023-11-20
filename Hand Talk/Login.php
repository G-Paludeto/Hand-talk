<?php
// Simulando um banco de dados com usuários
$users = [
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2'],
];

header('Content-Type: application/json');

// Recebendo dados do formulário de login
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Verificando as credenciais
$user = array_filter($users, function ($u) use ($username, $password) {
    return $u['username'] === $username && $u['password'] === $password;
});

if (!empty($user)) {
    echo json_encode(['success' => true, 'message' => 'Login bem-sucedido']);
} else {
    echo json_encode(['success' => false, 'message' => 'Credenciais inválidas']);
}
?>
