<?php require "vista/layout/header.php"; ?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .contact-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 20px;
    }

    .contact-header {
        margin-bottom: 40px;
        text-align: center;
    }

    .contact-header h1 {
        font-size: 2.5em;
        color: #ff6600;
        margin: 0;
    }

    .contact-header p {
        font-size: 1.2em;
        color: #6c757d;
        margin-top: 10px;
    }

    .contact-form {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        padding: 30px;
        box-sizing: border-box;
    }

    .contact-form .form-group {
        margin-bottom: 20px;
    }

    .contact-form label {
        font-size: 1em;
        color: #6c757d;
        display: block;
        margin-bottom: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        font-size: 1em;
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 150px;
    }

    .contact-form button {
        background-color: #6c757d;
        color: #ffffff;
        font-size: 1.2em;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form button:hover {
        background-color: #5a6268;
    }

    .contact-details {
        margin-top: 40px;
        text-align: center;
    }

    .contact-details p {
        font-size: 1em;
        color: #6c757d;
        margin: 5px 0;
    }

    .contact-details a {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .contact-details a:hover {
        color: #0056b3;
    }
</style>

<!-- vista/contacto.php -->
<div class="contact-container">
    <div class="contact-header">
        <h1>Contacto</h1>
        <p>Estamos aquí para ayudarte. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
    </div>
    <div class="contact-form">
    <form action="controlador/ContactoControlador.php" method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" name="registro">Enviar</button>
        </form>
    </div>
    <div class="contact-details">
        <p>Teléfono: <a href="tel:+123456789">+1 234 567 89</a></p>
        <p>Email: <a href="mailto:info@candyshop.com">info@candyshop.com</a></p>
    </div>
</div>


<?php require "vista/layout/footer.php"; ?>
