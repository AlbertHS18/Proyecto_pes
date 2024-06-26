<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explosión de sabor</title>  
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('imagenes/fondo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .login-form {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }
        .register-link {
            text-align: center;
            margin-bottom: 15px;
        }
        .register-link a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagenes/logo.ico" alt="Logo del restaurante" class="mr-2">
            Restaurant explosión de sabor
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><span>Inicio</span></a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php"><span>Menú</span></a></li>
                <li class="nav-item"><a class="nav-link" href="informacion.php"><span>Acerca de...</span></a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login.php"><span>Login</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="login-container">
    <div class="login-form">
        <?php
        include('includes/database.php');
        include('includes/controlador.php');
        ?>
        <h2 class="text-center mb-4">Iniciar sesión</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Correo electronico</label>
                <input type="text" class="form-control" name="username" placeholder="Ingrese su correo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña">
            </div>
            <div class="register-link">
                <p><a href="registro.php">Regístrate aquí</a></p>
            </div>
            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="ingresar" value="valor">Iniciar sesión</button>
            </div>
        </form>
    </div>

    <script>
        setTimeout(function(){
            document.getElementById('access-denied').style.display = 'none';
        }, 3000);
    </script>
    
</div>

<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Restaurante Explosión de sabor, todos los derechos reservados By Albert Hernández & Francisco Javier.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
