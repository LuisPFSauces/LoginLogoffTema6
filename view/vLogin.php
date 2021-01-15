<header>
    <h1>LOGIN LOGOFF MULTICAPA PDO</h1>
</header>
	<form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<legend>Inicio de sesión</legend>
		<div>
			<label for="user">Nombre de usuario: </label>
			<input type="text" name="user" placeholder="Usuario">
		</div>
		<div>
			<label for="pass">Contraseña: </label>
			<input type="password" name="pass" placeholder="Password">
		</div>
		<div>
			<button type="submit" name="enviar">INICIAR SESIÓN</button>
                        <button type="submit" name="atras">ATRÁS</button>
		</div>
	</form>
