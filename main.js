function enviarWhatsapp() {
	// Obtener los valores del formulario
	var nombre = document.getElementById("nombre").value;
	var telefono = document.getElementById("telefono").value;
	var mensaje = document.getElementById("mensaje").value;

	// Formatear el mensaje para enviar por WhatsApp
	var mensajeWhatsapp = "Hola, mi nombre es " + nombre + " y mi número de teléfono es " + telefono + ". " + mensaje;

	// Abrir la aplicación de WhatsApp con el mensaje predefinido
	window.open("https://api.whatsapp.com/send?phone=01125472001&text=" + encodeURIComponent(mensajeWhatsapp));
}

function enviarCorreo() {
  // Obtener los valores del formulario
  var nombre = document.getElementById("nombre").value;
  var correo = document.getElementById("correo").value;
  var telefono = document.getElementById("telefono").value;
  var mensaje = document.getElementById("mensaje").value;

  // Crear un objeto XMLHttpRequest para enviar el correo electrónico
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "enviar.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Configurar la función a ejecutar cuando se reciba la respuesta del servidor
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      alert("¡Mensaje enviado!");
    }
  };

  // Configurar el mensaje del correo electrónico
  var asunto = "Nuevo mensaje de " + nombre;
  var cuerpo = "Nombre: " + nombre + "\n" +
               "Correo electrónico: " + correo + "\n" +
               "Número de teléfono: " + telefono + "\n\n" +
               "Mensaje:\n" + mensaje;

  // Enviar el mensaje del correo electrónico
  xhr.send("to=destinatario@ejemplo.com&subject=" + encodeURIComponent(asunto) + "&body=" + encodeURIComponent(cuerpo));
}
