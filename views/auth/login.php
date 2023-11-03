<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email" value="<?php echo s( $auth -> email ); ?>" />
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu password" />
    </div>
    <input type="submit" value="Iniciar sesión" class="boton" />
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>