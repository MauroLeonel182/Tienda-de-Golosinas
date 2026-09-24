<?php require "vista/layout/header.php"; ?>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-section {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .form-section h2 {
        font-size: 32px;
        color: #ff6600;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 18px;
        color: #495057;
        margin-bottom: 8px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        color: #495057;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-group button {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        color: #ffffff;
        background-color: #6c757d;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #495057;
    }

    .toggle-link {
        text-align: center;
        color: #6c757d;
        cursor: pointer;
        margin-top: 20px;
    }

    .toggle-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div id="login" class="form-section">
        <h2>Bienvenido</h2>
        <form id="loginform" action="<?php echo urlsite ?>?page=loginout" method="post">
            <div class="form-group">
                <label for="txtemail">Email</label>
                <input type="email" id="txtemail" name="txtemail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="txtpassword">Password</label>
                <input type="password" id="txtpassword" name="txtpassword" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="btnlogin">Login</button>
            </div>
        </form>
    </div>
</div>
       

<?php require "vista/layout/footer.php"; ?>
