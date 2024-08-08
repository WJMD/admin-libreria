// contact.js

document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contact-form');

  contactForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío por defecto del formulario

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Enviar los datos a través de AJAX
    fetch('save_contact.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.text())
    .then(data => {
      // Manejar la respuesta del servidor
      console.log(data);
      // Mostrar un mensaje de éxito o error al usuario
    })
    .catch(error => {
      console.error('Error:', error);
      // Mostrar un mensaje de error al usuario
    });
  });
});