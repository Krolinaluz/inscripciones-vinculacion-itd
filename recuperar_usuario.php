<?php
    include("bs-code/encabezado.php");
?>

<?php
    include("bs-code/name-line.php");
?>
<head>
<link rel="stylesheet" href="css/recuperar_usuarios.css">
<echo rel="stylesheet" href="css/recuperar_usuarios.css">
</head>
<body>
    <h1> RECUPERAR CONTRASEÑAa </h1>
        <div class="container">
            <form action="" class="form">
                <div class="form_correo">
                    <input type="email" placeholder="Ingrese su correo" class="correo">
                </div>
                <div class="form_button">
                    <a href="index.php">Regresar</a>
                    <button>Enviar link</button>
                </div>
            </form>
        </div>
</body>
<?php
    include("bs-code/footer.php");
?>