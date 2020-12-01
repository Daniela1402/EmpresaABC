<?php if (!$_SESSION) {
	echo '<script type="text/javascript">window.location.href="Login";</script>';
} ?>
<?php $clientesController = new ClientesController(); ?>

<div class="col-lg-12">
	<div class="row">
		<div class="col-lg-12 mt-4 mb-4 p-3 bg-white shadow-lg">
			<div class="row">
				<div class="col-lg-4">
					<form method="POST">
						<div class="form-group">
							<label>Cedula</label>
							<input type="number" name="clientes_cedula_c" class="form-control" id="clientes_cedula_c" placeholder="Cedula" required>
						</div>

						<div class="form-group">
							<label>Nombres</label>
							<input type="text" name="clientes_nombres_c" class="form-control" id="clientes_nombres_c" placeholder="Nombres" required>
						</div>

						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="clientes_apellidos_c" class="form-control" id="clientes_apellidos_c" placeholder="Apellidos" required>
						</div>

						<div class="form-group">
							<label>Domicilio</label>
							<textarea name="clientes_domicilio_c" class="form-control" id="clientes_domicilio_c" placeholder="Domicilio" required></textarea>
						</div>

						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="clientes_telefono_c" class="form-control" id="clientes_telefono_c" placeholder="Telefono" required>
						</div>

						<button type="submit" class="btn btn-success btn-block">Registrar</button>

						<?php if ($clientesController->createClientes()) { ?>
							<script type="text/javascript">
								window.location.href="Clientes";
							</script>
						<?php } ?>

						<hr>
					</form>
				</div>

				<div class="col-lg-8">
					<div class="table-responsive">
						<table class="table text-center">
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Cedula</th>
									<th scope="col">Nombres</th>
									<th scope="col">Apellidos</th>
									<th scope="col">Domicilio</th>
									<th scope="col">Telefono</th>
									<th scope="col">Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($clientesController->readClientes() as $key => $clientes) {
									echo(
										"<tr>
										<td>" . ($clientes->getIdClientes()) . "</td>
										<td>" . ($clientes->getClientesCedula()) . "</td>
										<td>" . ($clientes->getClientesNombres()) . "</td>
										<td>" . ($clientes->getClientesApellidos()) . "</td>
										<td>" . ($clientes->getClientesDomicilio()) . "</td>
										<td>" . ($clientes->getClientesTelefono()) . "</td>
										<td><div class='btn-group' role='group'><button class='btn btn-warning' data-toggle='modal' data-target='#modal_clientes_modificar'>Modificar</button><button class='btn btn-danger'>Eliminar</button></div>
										</td>
										</tr>"
									);
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>