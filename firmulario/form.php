<?php if(isset($_POST["submit"])): ?>

<h2>Mostrar datos enviados</h2>

Nombre : <?= $_POST['nombre'] ?? "" ?> <br>

Contraseña : <?= $_POST['password'] ?? "" ?> <br>

Educación : <?= $_POST['educacion'] ?? "" ?> <br>

Avatar : <?= $_POST["avatar"] ?? "" ?> <br>

<?php endif; ?>

