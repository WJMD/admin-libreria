<?php
include_once 'config/Database.php';
include_once 'class/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

// Obtener los datos del formulario
$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$message = trim(htmlspecialchars($_POST['message']));

// Validar que los campos no estén vacíos
if (!empty($name) && !empty($email) && !empty($message)) {
    // Guardar el contacto
    if ($contact->saveContact($name, $email, $message)) {
        echo "Mensaje guardado exitosamente.";
    } else {
        echo "Error al guardar el mensaje: " . $contact->getError();
    }
} else {
    echo "Por favor, completa todos los campos.";
}
?>