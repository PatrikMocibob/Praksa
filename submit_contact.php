<?php
$host = 'localhost';      
$db   = 'patrik';  
$user = 'root';  
$pass = '';  
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Collect data from POST
    $name = $_POST['firstname'] ?? '';
    $lastName = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Insert query
    $stmt = $pdo->prepare("INSERT INTO ContactForm (Name, LastName, Email, Phone, Message)
                           VALUES (:name, :lastName, :email, :phone, :message)");

    $stmt->execute([
        ':name' => $name,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phone' => $phone,
        ':message' => $message,
    ]);

    echo json_encode(['success' => true]);

} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
