<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/joc.js"></script>
    <title>Home</title>
</head>

<body>
    <video autoplay muted loop id="backgroundvideo">
        <source src="/video/barcelona.mp4" type="video/mp4">
    </video>
    <div class="generalIndex">
        <div class="start">
            <h1 class="Color1">LOS HOMBRES DEL JACO</h1>
            <a href="server.php" class="Color1">Start</a>
        </div>
        <div class="loginyregister">
            <button onclick="abrirlogin()">
                <p class="Color1">LOGIN</p>
            </button><br>
            <button onclick="abrirregister()">
                <p class="Color1">REGISTER</p>
            </button>
        </div>
        <div class="login" id="login">
            <button class="boton-register" onclick="quitarlogin()">x</button><br>
            <form action="/login.php" method="POST">
                <input type="text" name="correo" placeholder="User">
                <input type="password" name="pwd" placeholder="****"><br>
                <input type="submit" value="Submit" class="enviarSubmit">
            </form>
        </div>
        <div class="register" id="register">
            <button class="boton-register" onclick="quitarregister()">x</button><br>
            <form action="register.php" method="POST">
                <input type="text" name="user" placeholder="Username">
                <input type="text" name="gmail" placeholder="Correo">
                <input type="password" name="pwd" placeholder="****">
                <label for="img">Avatar:</label>
                <input type="file" id="img" name="img" accept="image/*">
                <input type="submit" value="Submit" class="enviarSubmit">
                <input type="text" name="" id="">
            </form>
        </div>

    </div>
</body>