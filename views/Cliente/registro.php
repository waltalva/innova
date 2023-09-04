<h1>Registro de Cliente</h1>

<form action="index.php?controller=clientes&action=save" method="POST">
	<label for="dni">DNI</label>
	<input type="text" name="dni" required />

	<label for="ap_paterno">Ap Paterno</label>
	<input type="text" name="Paterno" required />

	<label for="ap_materno">Ap Materno</label>
	<input type="text" name="Materno" required />

	<label for="nombres">Nombres</label>
	<input type="text" name="nombres" required />

	<label for="direccion">Dirección</label>
	<input type="text" name="direccion" required />

	<label for="e-mail">E-mail</label>
	<input type="text" name="e-mail" required />

	<label for="fono1">Telefono</label>
	<input type="text" name="fono1" required />

	<label for="fono2">Telefono 2</label>
	<input type="text" name="fono2" required />

	<label for="f_alta">Fecha</label>
	<input type="date" name="f_alta" required />

	<label for="activo">Activo</label>
	<input type="checkbox" name="activo" required />

	<label for="obs">Obs</label>
	<input type="text" name="obs" required />

	<input type="submit" value="Registrar"/>
</form>