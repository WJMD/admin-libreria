<?php
include_once 'config/Database.php';
include_once 'class/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Guardar el contacto
if ($contact->saveContact($name, $email, $message)) {
    echo "Mensaje guardado exitosamente.";
} else {
    echo "Error al guardar el mensaje: " . $db->error;
}
?>